<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Session;
use Carbon\Carbon;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $users = User::withTrashed()->get();
        return view('admin.users.list', compact('users', 'req'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $req)
    {

        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->mobile = $req->mobile;
        $user->password = $req->password;
        $user->address = $req->address;
        $user->location = $req->location;
        $user->pincode = $req->pincode;
        $user->role = $req->role;
        $user->status = $req->status;
        $user->about = $req->about;
        $user->visitor = $req->ip;
        $user->save();

        $req->session()->flash('msg', 'User Inserted successful!');
        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //return $user;
        return view('admin.users.view', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, User $user)
    {
        $user->name = $req->name;
        $user->address = $req->address;
        $user->location = $req->location;
        $user->pincode = $req->pincode;
        $user->about = $req->about;
        $user->role = $req->role;
        $user->status = $req->status;
        $user->updated_at = new Carbon();
        $user->save();

        Session::flash('msg', 'User Update successful!');
        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        Session::flash('msg', 'User Deleted successful!');
        return redirect('admin/users');
    }

    public function remove($id)
    {
        User::withTrashed()->find($id)->forceDelete();
        Session::flash('msg', 'User Removed from database successful!');
        return redirect('admin/users');
    }

    public function restore($id)
    {
      User::withTrashed()->find($id)->restore();
      Session::flash('msg', 'User Restored successful!');
      return redirect('admin/users');
    }
}

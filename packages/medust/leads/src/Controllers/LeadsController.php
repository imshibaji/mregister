<?php

namespace Medust\Leads\Controllers;

use Medust\Leads\Models\Lead;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Carbon\Carbon;

class LeadsController extends Controller
{
    // public function index(){
    //   $name = 'Abir';
    //   $job = 'Software Developer';
    //
    //   $data['name'] = 'Shibaji';
    //   $data['job'] = 'IT Trainer';
    //
    //   return view('mleads::index', $data);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leads = Lead::all();
        return view('mleads::list', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('mleads::add', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
      $user = User::where('email',$req->email)->where('mobile', $req->mobile)->first();

        if($user){
          $user->name = $req->name;
          // $user->mobile = $req->mobile;
          // $user->email = $req->email;
          $user->address = $req->address;
        }else{
          $user = new User();
          $user->name = $req->name;
          $user->mobile = $req->mobile;
          $user->email = $req->email;
          $user->address = $req->address;
        }

        $user->save();

        $lead = new Lead();
        $lead->requirement = $req->requirement;
        $lead->require_details = $req->require_details;
        $lead->note = $req->note;
        $lead->lead_source = $req->lead_source;
        $lead->status = $req->status;
        $lead->confirm = $req->confirm;
        $lead->job_assign = $req->job_assign;
        $lead->refered_by = $req->uid;
        $lead->user()->associate($user);
        $lead->save();

        return redirect('admin/leads');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function show(Lead $lead)
    {
        return $lead;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function edit(Lead $lead)
    {
        $users = User::all();
        return view('mleads::edit', compact('users', 'lead'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Lead $lead)
    {
      $user = User::withTrashed()->find($lead->user->id);
      if($user->email_varified == true){
        $user->name = $req->name;
        $user->mobile = $req->mobile;
        $user->address = $req->address;

      }else if($user->mobile_varified == true){
        $user->name = $req->name;
        $user->email = $req->email;
        $user->address = $req->address;

      }else if($user->email_varified == true && $user->mobile_varified == true){
        $user->address = $req->address;
      }else{
        $user->name = $req->name;
        $user->mobile = $req->mobile;
        $user->email = $req->email;
        $user->address = $req->address;
      }

      $user->save();

      $lead->requirement = $req->requirement;
      $lead->require_details = $req->require_details;
      $lead->note = $req->note;
      $lead->lead_source = $req->lead_source;
      $lead->status = $req->status;
      $lead->confirm = $req->confirm;
      $lead->job_assign = $req->job_assign;
      $lead->refered_by = $req->uid;

      $lead->user()->associate($user);
      $lead->save();

      return redirect('admin/leads');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lead $lead)
    {
        $lead->delete();
        $user = User::withTrashed()->where('id', $lead->user->id)->first();
        
        if(($user->email_varified == "false" && $user->mobile_varified == "false")){
          $user->forceDelete();
        }

        return redirect('admin/leads');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Medust\Leads\Models\Lead;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;

class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leads = Lead::all();
        return view('admin.leads.list', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin.leads.add', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $lead = new Lead();
        $lead->name = $req->name;
        $lead->mobile = $req->mobile;
        $lead->email = $req->email;
        $lead->address = $req->address;
        $lead->requirement = $req->requirement;
        $lead->require_details = $req->require_details;
        $lead->note = $req->note;
        $lead->lead_source = $req->lead_source;
        $lead->status = $req->status;
        $lead->confirm = $req->confirm;
        $lead->job_assign = $req->job_assign;
        $lead->user_id = $req->uid;
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
        return view('admin.leads.edit', compact('users', 'lead'));
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
      $lead->name = $req->name;
      $lead->mobile = $req->mobile;
      $lead->email = $req->email;
      $lead->address = $req->address;
      $lead->requirement = $req->requirement;
      $lead->require_details = $req->require_details;
      $lead->note = $req->note;
      $lead->lead_source = $req->lead_source;
      $lead->status = $req->status;
      $lead->confirm = $req->confirm;
      $lead->job_assign = $req->job_assign;
      $lead->user_id = $req->uid;
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
        return redirect('admin/leads');
    }
}

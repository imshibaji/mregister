<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Medust\Leads\Models\Lead;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function getIndex(Request $req){
      $ip = $req->ip();
      $time = Carbon::now();
      $aftertime = Carbon::now()->addMinutes(10);
      $deffer = $aftertime->diffInMinutes($time);

      return view('admin.dashboard', compact('ip', 'time','aftertime', 'deffer'));
    }

    public function getChat(){
      return view('admin.page');
    }

    public function getComments(){
      return view('admin.page');
    }

    public function getLeadjobs(){
      return view('admin.page');
    }

    public function getManageleads(){
      $leads = Lead::all();
      $users = User::all();
      return view('admin.leads.job', compact('leads', 'users'));
    }
}

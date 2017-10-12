<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class StuffController extends Controller
{
    public function getIndex()
    {
      $users = User::all();
      return view('admin.users', compact('users'));
    }
    public function getAddstuff($value='')
    {
      # code...
    }

    public function getSallers($value='')
    {
      # code...
    }
    public function getDesigners($value='')
    {
      # code...
    }
    public function getWriters($value='')
    {
      # code...
    }
    public function getDevelopers($value='')
    {
      # code...
    }
    public function getTeachers($value='')
    {
      # code...
    }
    public function getManagers($value='')
    {
      # code...
    }

}

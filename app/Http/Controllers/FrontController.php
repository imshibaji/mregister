<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
      $name = 'Abir';
      $job = 'Software Developer';

      $data['name'] = 'Shibaji';
      $data['job'] = 'IT Trainer';

      return view('about', $data);
    }
}

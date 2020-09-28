<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Musim_tanamController extends Controller
{
  public function index()
  {
    return view('Pages.Musim_tanam.index');
  }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KebutuhanController extends Controller
{
  public function index()
  {
    return view('Pages.Kebutuhan.index');
  }
}

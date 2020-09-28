<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
  public function index()
  {
    return view('Pages.Rekomendasi.index');
  }
}

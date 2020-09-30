<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
  public function index()
  {
    $this->var = [
      'title' => 'Dashboard | Rekomendasi'
    ];
    return view('Pages.Rekomendasi.index', $this->var);
  }
}

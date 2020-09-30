<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Musim_tanamController extends Controller
{
  public function index()
  {
    $this->var = [
      'title' => 'Dashboard | Musim Tanam'
    ];
    return view('Pages.Musim_tanam.index', $this->var);
  }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
  public function index()
  {
    $this->var = [
      'title' => 'Dashboard | Wilayah'
    ];
    return view('Pages.Wilayah.index', $this->var);
  }
}

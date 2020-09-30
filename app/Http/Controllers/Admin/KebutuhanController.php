<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KebutuhanController extends Controller
{
  public function index()
  {
    $this->var = [
      'title' => 'Dashboard | Kebutuhan'
    ];
    return view('Pages.Kebutuhan.index', $this->var);
  }
}

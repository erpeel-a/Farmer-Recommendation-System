<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $this->var = [
            'title' => 'Dashboard | Admin',
            'User' => \App\Models\User::count(),
            'Kebutuhan' => \App\Models\Kebutuhan::count(),
            'Rekomendasi' => \App\Models\Rekomendasi::count(),
            'Musim' => \App\Models\Musim_Tanam::count(),
        ];
        return view('Pages.Dashboard', $this->var);
    }
}

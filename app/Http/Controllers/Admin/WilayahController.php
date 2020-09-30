<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wilayah;
use Illuminate\Support\Facades\Crypt;

class WilayahController extends Controller
{
  public function index()
  {
    $this->var = [
      'title' => 'Dashboard | Wilayah',
      'wilayah' => Wilayah::all()
    ];
    return view('Pages.Wilayah.index', $this->var);
  }
  public function create()
  {
    $this->var = [
      'title' => 'Dashboard | Tambah Wilayah'
    ];
    return view('Pages.Wilayah.create', $this->var);
  }
  public function store(Request $req)
  {
    $req->validate([
      'nama_wilayah' => 'required'
    ]);
    Wilayah::create($req->all());
    return redirect('/wilayah')->with('status', 'Data Wilayah Berhasil Ditambahkan');
  }

  public function edit($id)
  {
    $_dec = Crypt::Decrypt($id);
    $this->var = [
      'title' => 'Dashboard | Edit Wilayah',
      'wilayah' => Wilayah::findOrfail($_dec)
    ];
    return view('Pages.Wilayah.edit', $this->var);
  }
  public function update(Request $req, $id)
  {
    $req->validate([
      'nama_wilayah' => 'required'
    ]);
    Wilayah::where(['id' => $id])->update(['nama_wilayah' => $req->nama_wilayah]);
    return redirect('/wilayah')->with('status', 'Data Wilayah Berhasil Diubah');
  }
  public function destroy($id)
  {
    Wilayah::destroy($id);
    return redirect('/wilayah')->with('status', 'Data Wilayah Berhasil Dihapus');
  }
}

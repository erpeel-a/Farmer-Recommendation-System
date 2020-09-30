<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Satuan;
use Illuminate\Support\Facades\Crypt;
class SatuanController extends Controller
{
  public function index()
  {
    $this->var = [
      'title' => 'Dashboard | Satuan',
      'satuan' => Satuan::all()
    ];
    return view('Pages.Satuan.index', $this->var);
  }
  public function create()
  {
    $this->var = [
      'title' => 'Dashboard | Tambah Satuan'
    ];
    return view('Pages.Satuan.create', $this->var);
  }
  public function store(Request $req)
  {
    $req->validate([
      'nama_satuan' => 'required'
    ]);
    Satuan::create($req->all());
    return redirect('/satuan')->with('status', 'Data Satuan Berhasil Ditambahkan');
  }
  public function edit($id)
  {
    $_dec = Crypt::Decrypt($id);
    $this->var = [
      'title' => 'Dashboard | Edit Satuan',
      'satuan' => Satuan::findOrfail($_dec),
    ];
    return view('Pages.Satuan.edit', $this->var);
  }
  public function update(Request $req,$id)
  {
    Satuan::where(['id' => $id])->update([
      'nama_satuan' => $req->nama_satuan
    ]);
    return redirect('/satuan')->with('status', 'Data Satuan Berhasil Diubah');
  }
  public function destroy($id)
  {
    Satuan::destroy($id);
    return redirect('/satuan')->with('status', 'Data Satuan Berhasil Dihapus');
  }
}

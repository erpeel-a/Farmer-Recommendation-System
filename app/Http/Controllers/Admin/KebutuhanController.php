<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kebutuhan;
use Illuminate\Http\Request;

use App\Models\Wilayah;
use App\Models\Satuan;

use Illuminate\Support\Facades\Crypt;

class KebutuhanController extends Controller
{
  public function index()
  {
    $this->var = [
      'title' => 'Dashboard | Kebutuhan',
      'kebutuhan' => Kebutuhan::get()
    ];
    return view('Pages.Kebutuhan.index', $this->var);
  }

  public function create()
  {
    $this->var = [
      'title' => 'Dashboard | Tambah Kebutuhan',
      'satuan' => Satuan::get(),
      'wilayah' => Wilayah::get()
    ];
    return view('Pages.Kebutuhan.create', $this->var);
  }

  public function store(Request $req)
  {
    $req->validate([
      'wilayah_id' => 'required',
      'satuan_id' => 'required',
      'nama_kebutuhan' => 'required|min:3|max:255',
      'harga_kebutuhan' => 'required|numeric',
      'keterangan' => 'required'
    ]);
    Kebutuhan::create($req->all());
    return redirect('/kebutuhan')->with('status', 'Data kebutuhan Berhasil Ditambahkan');
  }

  public function edit($id)
  {
    $_dec = Crypt::Decrypt($id);
    $this->var = [
      'title' => 'Dashboard | Edit Kebutuhan',
      'kebutuhan' => Kebutuhan::findOrfail($_dec),
      'satuan' => Satuan::get(),
      'wilayah' => Wilayah::get()
    ];
    return view('Pages.Kebutuhan.edit', $this->var);
  }

  public function update(Request $req, $id)
  {
    $req->validate([
      'wilayah_id' => 'required',
      'satuan_id' => 'required',
      'nama_kebutuhan' => 'required|min:3|max:255',
      'harga_kebutuhan' => 'required|numeric',
      'keterangan' => 'required'
    ]);
    Kebutuhan::where(['id' => $id])->update([
      'wilayah_id' => $req->wilayah_id,
      'satuan_id' => $req->satuan_id,
      'nama_kebutuhan' => $req->nama_kebutuhan,
      'harga_kebutuhan' => $req->harga_kebutuhan,
      'keterangan' => $req->keterangan,
    ]);
    return redirect('/kebutuhan')->with('status', 'Data Kebutuhan Berhasil Diubah');
  }

  public function destroy($id)
  {
    Kebutuhan::destroy($id);
    return redirect('/kebutuhan')->with('status', 'Data Kebutuhan Berhasil Dihapus');
  }
}

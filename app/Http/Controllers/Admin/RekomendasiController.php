<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kebutuhan;
use App\Models\Rekomendasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class RekomendasiController extends Controller
{
  public function index()
  {
    $this->var = [
      'title' => 'Dashboard | Rekomendasi',
      'rekomendasi' => Rekomendasi::get()
    ];
    return view('Pages.Rekomendasi.index', $this->var);
  }

  public function create()
  {
    $this->var = [
      'title' => 'Dashboard | Tambah Rekomendasi',
      'kebutuhan' => Kebutuhan::get(),
    ];
    return view('Pages.Rekomendasi.create', $this->var);
  }

  public function store(Request $req)
  {
    $req->validate([
      'kebutuhan_id' => 'required',
      'jumlah' => 'required',
      'harga_total' => 'required',
    ]);
    Rekomendasi::create($req->all());
    return redirect('/rekomendasi')->with('status', 'Data Rekomendasi Berhasil Ditambahkan');
  }

  public function edit($id)
  {
    $_dec = Crypt::Decrypt($id);
    $this->var = [
      'title' => 'Dashboard | Edit Rekomendasi',
      'rekomendasi' => Rekomendasi::findOrfail($_dec),
      'kebutuhan' => Kebutuhan::get(),
    ];
    return view('Pages.Rekomendasi.edit', $this->var);
  }

  public function update(Request $req, $id)
  {
    $req->validate([
      'kebutuhan_id' => 'required',
      'jumlah' => 'required',
      'harga_total' => 'required',
    ]);
    Rekomendasi::where(['id' => $id])->update([
      'kebutuhan_id' => $req->kebutuhan_id,
      'jumlah' => $req->jumlah,
      'harga_total' => $req->harga_total,
    ]);
    return redirect('/rekomendasi')->with('status', 'Data Rekomendasi Berhasil Diubah');
  }

  public function destroy($id)
  {
    Rekomendasi::destroy($id);
    return redirect('/rekomendasi')->with('status', 'Data Rekomendasi Berhasil Dihapus');
  }
}

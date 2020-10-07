<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Musim_Tanam;
use App\Models\Rekomendasi;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class Musim_tanamController extends Controller
{
  public function index()
  {
    $this->var = [
      'title' => 'Dashboard | Musim Tanam',
      'musim' => Musim_Tanam::get()
    ];
    return view('Pages.Musim_tanam.index', $this->var);
  }

  public function create()
  {
    $this->var = [
      'title' => 'Dashboard | Tambah Musim Tanam',
      'wilayah' => Wilayah::get(),
      'rekomendasi' => Rekomendasi::get(),
    ];
    return view('Pages.Musim_tanam.create', $this->var);
  }

  public function store(Request $req)
  {
    $req->validate([
      'rekomendasi_id' => 'required',
      'wilayah_id' => 'required',
      'nomor_musim' => 'required|unique:musim_tanam',
      'nama_petani' => 'required',
      'nama_musim' => 'required',
      'luas_tanah' => 'required',
      'tanggal_tanam' => 'required',
    ]);
    Musim_Tanam::create($req->all());
    return redirect('/musim')->with('status', 'Data Musim Tanam Berhasil Ditambahkan');
  }

  public function edit($id)
  {
    $_dec = Crypt::Decrypt($id);
    $this->var = [
      'title' => 'Dashboard | Edit Musim Tanam',
      'musim' => Musim_Tanam::findOrfail($_dec),
      'wilayah' => Wilayah::get(),
      'rekomendasi' => Rekomendasi::get(),
    ];
    return view('Pages.Musim_tanam.edit', $this->var);
  }

  public function update(Request $req, $id)
  {
    $req->validate([
      'rekomendasi_id' => 'required',
      'wilayah_id' => 'required',
      'nomor_musim' => 'required',
      'nama_petani' => 'required',
      'nama_musim' => 'required',
      'luas_tanah' => 'required',
      'tanggal_tanam' => 'required',
    ]);
    Musim_Tanam::where(['id' => $id])->update([
      'rekomendasi_id' => $req->rekomendasi_id,
      'wilayah_id' => $req->wilayah_id,
      'nomor_musim' => $req->nomor_musim,
      'nama_petani' => $req->nama_petani,
      'nama_musim' => $req->nama_musim,
      'luas_tanah' => $req->luas_tanah,
      'tanggal_tanam' => $req->tanggal_tanam,
    ]);
    return redirect('/musim')->with('status', 'Data Musim Tanam Berhasil Diubah');
  }

  public function destroy($id)
  {
    Musim_Tanam::destroy($id);
    return redirect('/musim')->with('status', 'Data Musim Tanam Berhasil Dihapus');
  }
}

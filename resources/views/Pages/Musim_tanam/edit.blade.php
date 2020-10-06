@extends('Schema.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Edit Musim Tanam</h1>
          </div>
        <form action="{{ route('musim.update', $musim->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('put')
            <div class="row">
                <div class="col-md">
                    <div class="card">
                        <div class="card-body">
                            
                          <div class="form-group">
                            <label for="wilayah_id">Wilayah</label>
                            <select name="wilayah_id" id="wilayah_id" class="form-control @error('wilayah_id') is-invalid @enderror">
                              @foreach ($wilayah as $w)
                              <option {{ $w->id == $musim->wilayah_id ? ' selected' : '' }} value="{{ $w->id }}">{{ $w->nama_wilayah }}</option>
                              @endforeach
                            </select>
                            @error('wilayah_id')
                              <div class="invalid-feedback">
                                {{$message}}
                              </div>
                            @enderror
                          </div>

                            <div class="form-group">
                              <label for="rekomendasi_id">Rekomendasi</label>
                              <select name="rekomendasi_id" id="rekomendasi_id" class="form-control @error('rekomendasi_id') is-invalid @enderror">
                                @foreach ($rekomendasi as $r)
                                <option {{ $r->id == $musim->rekomendasi_id ? ' selected' : '' }} value="{{ $r->id }}">{{ $r->kebutuhan->nama_kebutuhan }}</option>
                                @endforeach
                              </select>
                              @error('rekomendasi_id')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                              @enderror
                            </div>

                            <div class="form-group">
                              <label for="nomor_musim">Nomor Musim</label>
                              <input type="number" id="nomor_musim" class="form-control @error('nomor_musim') is-invalid @enderror" name="nomor_musim"  value="{{ $musim->nomor_musim }}">
                              @error('nomor_musim')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                              @enderror
                            </div>

                            <div class="form-group">
                              <label for="nama_petani">Nama Petani</label>
                              <input type="text" id="nama_petani" class="form-control @error('nama_petani') is-invalid @enderror" name="nama_petani"  value="{{ $musim->nama_petani }}">
                              @error('nama_petani')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                              @enderror
                            </div>

                            <div class="form-group">
                              <label for="nama_musim">Nama Musim</label>
                              <input type="text" id="nama_musim" class="form-control @error('nama_musim') is-invalid @enderror" name="nama_musim"  value="{{ $musim->nama_musim }}">
                              @error('nama_musim')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                              @enderror
                            </div>

                            <div class="form-group">
                              <label for="luas_tanah">Luas Tanah</label>
                              <input type="number" id="luas_tanah" class="form-control @error('luas_tanah') is-invalid @enderror" name="luas_tanah"  value="{{ $musim->luas_tanah }}">
                              @error('luas_tanah')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                              @enderror
                            </div>

                            <div class="form-group">
                              <label for="tanggal_tanam">Tanggal Tanam</label>
                              <input type="date" id="tanggal_tanam" class="form-control @error('tanggal_tanam') is-invalid @enderror" name="tanggal_tanam"  value="{{ $musim->tanggal_tanam }}">
                              @error('tanggal_tanam')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                              @enderror
                            </div>
                        
                            <div class="card-footer bg-whitesmoke">
                              <button type="submit" class="btn btn-simpan  btn-primary">
                                  Simpan
                              </button>
                            <a href="{{url('/satuan')}}" class="btn btn-danger  btn-secondary">
                                  Batal
                              </a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      </section>
  </div>
@endsection
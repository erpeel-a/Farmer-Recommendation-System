@extends('Schema.view_stucture')
@section('Content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tambah Kebutuhan</h1>
    </div>
    <form action="{{route('kebutuhan.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="row">
          <div class="col-md">
            <div class="card">
              <div class="card-body">

                <div class="form-group">
                  <label for="wilayah_id">Wilayah</label>
                  <select name="wilayah_id" id="wilayah_id" class="form-control @error('wilayah_id') is-invalid @enderror">
                    <option disabled selected>wilayah</option>
                    @foreach ($wilayah as $w)
                      <option value="{{ $w->id }}">{{ $w->nama_wilayah }}</option>
                    @endforeach
                  </select>
                  @error('wilayah_id')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="satuan_id">Satuan</label>
                  <select name="satuan_id" id="satuan_id" class="form-control @error('satuan_id') is-invalid @enderror">
                    <option disabled selected>satuan</option>
                    @foreach ($satuan as $s)
                      <option value="{{ $s->id }}">{{ $s->nama_satuan }}</option>
                    @endforeach
                  </select>
                  @error('satuan_id')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="nama_kebutuhan">Nama Kebutuhan</label>
                  <input type="text" id="nama_kebutuhan" class="form-control @error('nama_kebutuhan') is-invalid @enderror" name="nama_kebutuhan" autofocus="" value="{{old('nama_kebutuhan')}}">
                  @error('nama_kebutuhan')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="harga_kebutuhan">Harga Kebutuhan</label>
                  <input type="number" id="harga_kebutuhan" class="form-control @error('harga_kebutuhan') is-invalid @enderror" name="harga_kebutuhan" autofocus="" value="{{old('harga_kebutuhan')}}">
                  @error('harga_kebutuhan')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" cols="200" rows="200">{{old('keterangan')}}</textarea>
                  @error('keterangan')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                  @enderror
                </div>
            
                <div class="card-footer bg-whitesmoke">
                  <button type="submit" class="btn btn-simpan  btn-primary">
                      Simpan
                  </button>
                  <a href="{{url('/kebutuhan')}}" class="btn btn-danger  btn-secondary">
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
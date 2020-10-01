@extends('Schema.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Edit Rekomendasi</h1>
          </div>
        <form action="#" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="row">
                <div class="col-md">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_wilayah">Nama Wilayah</label>
                            <input type="text" id="nama_wilayah" class="form-control @error('nama_wilayah') is invalid @enderror" name="nama_wilayah" autofocus="" value="{{old('nama_wilayah')}}">
                            @error('nama_wilayah')
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
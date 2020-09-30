@extends('Schema.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Tambah Satuan</h1>
          </div>
        <form action="{{route('satuan.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="row">
                <div class="col-md">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Nama Satuan</label>
                            <input type="text" id="title" class="form-control @error('nama_satuan') is invalid @enderror" name="nama_satuan" autofocus="" value="{{old('nama_satuan')}}">
                            @error('nama_satuan')
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
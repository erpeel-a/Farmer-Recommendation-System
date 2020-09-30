@extends('Schema.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Edit Satuan</h1>
          </div>
        <form action="{{route('satuan.update', $satuan->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('put')
            <div class="row">
                <div class="col-md">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_satuan">Nama Satuan</label>
                            <input type="text" id="nama_satuan" class="form-control @error('nama_satuan') is invalid @enderror" name="nama_satuan" autofocus="" value="{{$satuan->nama_satuan}}">
                            </div>
                            @error('nama_satuan')
                              <div class="invalid-feedback">
                                {{$message}}
                              </div>
                            @enderror
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
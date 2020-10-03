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
                            <label for="kebutuhan_id">Kebutuhan</label>
                            <select name="kebutuhan_id" id="kebutuhan_id" class="form-control @error('kebutuhan_id') is-invalid @enderror">
                              <option disabled selected>kebutuhan</option>
                              <option value="">kebutuhan1</option>
                              <option value="">kebutuhan2</option>
                              <option value="">kebutuhan3</option>
                            </select>
                            @error('kebutuhan_id')
                              <div class="invalid-feedback">
                                {{$message}}
                              </div>
                            @enderror
                          </div>

                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="number" id="jumlah" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" autofocus="" value="{{old('jumlah')}}">
                                @error('jumlah')
                                  <div class="invalid-feedback">
                                    {{$message}}
                                  </div>
                                @enderror
                            </div>

                            <div class="form-group">
                              <label for="harga_total">Harga Total</label>
                              <input type="number" id="harga_total" class="form-control @error('harga_total') is-invalid @enderror" name="harga_total" autofocus="" value="{{old('harga_total')}}">
                              @error('harga_total')
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
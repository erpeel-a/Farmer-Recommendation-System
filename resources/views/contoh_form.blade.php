@extends('Schema.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Contoh Form Tambah</h1>
          </div>
          <form action="#" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-black-50">Tambah</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" class="form-control" name="" autofocus="" value="">
                            </div>
                            <div class="form-group">
                              <label for="title">title</label>
                              <select name="" id="" class="form-control">
                                <option value="" class="form-control">-Pilih Kategori-</option>
                                <option value="" class="form-control">title</option>
                                <option value="" class="form-control">title</option>
                                <option value="" class="form-control">title</option>
                              </select>
                          </div>
                            <div class="form-group">
                                <label for="description">title</label>
                                <textarea id="description" cols="30" rows="10" class="form-control" style="height: auto;" name=""></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-black-50">Aksi</h4>
                        </div>
                        <div class="card-footer bg-whitesmoke">
                            <button type="submit" class="btn btn-simpan  btn-primary">
                                Simpan
                            </button>
                        
                            <a href="#" class="btn btn-danger  btn-secondary">
                                Batal
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      </section>
  </div>
@endsection
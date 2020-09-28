@extends('Schema.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Master Data Kebutuhan</h1>
          </div>
          <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-body">
                 <div class="table-responsive">
                    <table class="table table-bordered" width="100%">
                      <thead class="thead-light">
                        <tr>
                          <th class="thead">No</th>
                          <th class="thead">Nama Kebutuhan</th>
                          <th class="thead">Jumlah</th>
                          <th class="thead">Satuan</th>
                          <th class="thead">Harga Kebutuhan</th>
                          <th class="thead">Keterangan</th>
                          <th class="thead">Aksi</th>
                        </tr>
                      </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>ini judul</td>
                            <td>ini judul</td>
                            <td>ini judul</td>
                            <td>ini judul</td>
                            <td>ini judul</td>
                            <td><a href="" class="btn btn-info ml-2 mr-2 mt-1">Update</a><a href="" class="btn btn-danger ml-2 mr-2 mt-1">Delete</a></td>
                          </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
  </div>
@endsection
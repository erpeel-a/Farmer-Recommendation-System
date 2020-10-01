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
              @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
              @endif
              <div class="card">
                <div class="card-body">
                  <a href="{{route('kebutuhan.create')}}" class="btn btn-primary float-right mb-2">Tambah item</a>
                 <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="TABLE_KEBUTUHAN">
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
                          <?php $i = 1; ?>
                          @foreach ($kebutuhan as $k)
                          <tr>
                            <td><?= $i++ ?></td>
                            <td>{{ $k->nama_kebutuhan }}</td>
                            <td>ini judul</td>
                            <td>{{ $k->satuan_id }}</td>
                            <td>{{ $k->harga_kebutuhan }}</td>
                            <td>{{ $k->keterangan }}</td>
                            <td>
                              <a href="{{route('kebutuhan.edit', Crypt::Encrypt($k->id))}}" class="btn btn-info ml-2 mr-2 mt-1">Update</a>
                              <form action="{{route('kebutuhan.destroy', $k->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger ml-2 mr-2 mt-1">Delete</button>
                              </form>
                            </td>  
                          </tr>
                          @endforeach
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
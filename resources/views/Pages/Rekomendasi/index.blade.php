@extends('Schema.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Master Data Rekomendasi</h1>
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
                <a href="{{route('rekomendasi.create')}}" class="btn btn-primary float-right mb-2">Tambah item</a>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="TABLE_REKOMENDASI">
                      <thead class="thead-light">
                        <tr>
                          <th class="thead">No</th>
                          <th class="thead">Nama Kebutuhan</th>
                          <th class="thead">Jumlah</th>
                          <th class="thead">Harga Total</th>
                          <th class="thead">Aksi</th>
                        </tr>
                      </thead>
                        <tbody>
                          @foreach ($rekomendasi as $item)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $item->kebutuhan_id }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>{{ $item->harga_total }}</td>
                            <td>
                              <a href="{{ route('rekomendasi.edit', Crypt::Encrypt($item->id)) }}" class="btn btn-info ml-2 mr-2 mt-1">Update</a>
                              <form action="{{route('rekomendasi.destroy', $item->id)}}" method="POST" class="d-inline">
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
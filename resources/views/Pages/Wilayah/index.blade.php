@extends('Schema.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Master Data Wilayah</h1>
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
                  <a href="{{route('wilayah.create')}}" class="btn btn-primary float-right mb-2">Tambah item</a>
                 <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="TABLE_WILAYAH">
                      <thead class="thead-light">
                        <tr>
                          <th class="thead">No</th>
                          <th class="thead">Nama Wilayah</th>
                          <th class="thead">Aksi</th>
                        </tr>
                      </thead>
                        <tbody>
                          @foreach ($wilayah as $item)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nama_wilayah}}</td>
                          <td><a href="{{route('wilayah.edit', Crypt::Encrypt($item->id))}}" class="btn btn-info ml-2 mr-2 mt-1">Update</a>
                          <form action="{{route('wilayah.destroy', $item->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                              <button type="submit" class="btn btn-danger ml-2 mr-2 mt-1">Delete</button>
                            </form>
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
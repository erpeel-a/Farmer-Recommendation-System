@extends('Schema.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Master Data Musim Tanam</h1>
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
                  <a href="{{route('musim.create')}}" class="btn btn-primary float-right mb-2">Tambah item</a>
                 <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="TABLE_MUSIM">
                      <thead class="thead-light">
                        <tr>
                          <th class="thead">No</th>
                          <th class="thead">Nama Petani</th>
                          <th class="thead">Nama Musim</th>
                          <th class="thead">Luas Tanah</th>
                          <th class="thead">Tanggal Tanam</th>
                          <th class="thead">Aksi</th>
                        </tr>
                      </thead>
                        <tbody>
                          @foreach ($musim as $m)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $m->nama_petani }}</td>
                            <td>{{ $m->nama_musim }}</td>
                            <td>{{ $m->luas_tanah }} ha</td>
                            {{-- <td>{{ $m->tanggal_tanam->format('d-m-y') }}</td> --}}
                            <td>{{ $m->tanggal_tanam }}</td>
                            <td>
                              <a href="{{ route('musim.edit', Crypt::Encrypt($m->id)) }}" class="btn btn-info ml-2 mr-2 mt-1">Update</a>
                              <form action="{{route('musim.destroy', $m->id)}}" method="POST" class="d-inline">
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
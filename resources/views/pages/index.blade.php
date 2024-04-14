@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">manajement penduduk</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('penduduk.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="col-md-6">
                            <label>alamat</label>
                            <input type="text" class="form-control" name="alamat">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>kelamin</label>
                            <input type="text" class="form-control" name="gender">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3 ">
                            <input type="submit" class="btn btn-info" value="save">
                        </div>

                        <div class="col-md-12 mt-3">
                        <a href="{{ route('export-penduduk') }}" class="btn btn-success mb-3">Ekspor ke Excel</a>
                        </div>

                    </div>
                </form>
            </div>

                <table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">nama</th>
                        <th scope="col">alamat</th>
                        <th scope="col">gender</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ( $penduduk as $key => $penduduk )

                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $penduduk->nama }}</td>
                            <td scope="col">{{ $penduduk->alamat }}</td>
                            <td scope="col">{{ $penduduk->gender }}</td>
                            <td scope="col">

                            <a href="{{  route('penduduk.edit', $penduduk->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('penduduk.destroy', $penduduk->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>

                          </tr>

                        @endforeach




                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
              background-color:#FFFF00;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush
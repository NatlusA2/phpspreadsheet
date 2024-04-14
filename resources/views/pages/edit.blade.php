@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">manajement penduduk</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('penduduk.update', $penduduk->id) }}">
                {!! csrf_field() !!}
                  @method("PATCH")
                    <div class="row">
                        <div class="col-md-6">
                            <label>nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $penduduk->nama }}">
                        </div>
                        <div class="col-md-6">
                            <label>alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ $penduduk->alamat }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>kelamin</label>
                            <input type="text" class="form-control" name="gender" value="{{ $penduduk->gender }}">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>

                    </div>
                </form>
            </div>

            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
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
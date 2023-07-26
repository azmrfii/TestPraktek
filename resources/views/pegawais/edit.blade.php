@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pegawai</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Edit Pegawai') }}
                        <a href="{{ route('pegawais.index') }}" class="float-right">Back</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('pegawais.update', $pegawai->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="pegawai_nama" class="col-md-4 col-form-label text-md-right">{{ __('Pegawai Nama') }}</label>

                                <div class="col-md-6">
                                    <input id="pegawai_nama" type="text" class="form-control @error('pegawai_nama') is-invalid @enderror"
                                        name="pegawai_nama" value="{{ old('pegawai_nama', $pegawai->pegawai_nama) }}" required
                                        autocomplete="pegawai_nama" autofocus>

                                    @error('pegawai_nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pegawai_jabatan" class="col-md-4 col-form-label text-md-right">{{ __('Pegawai Jabatan') }}</label>

                                <div class="col-md-6">
                                    <input id="pegawai_jabatan" type="text" class="form-control @error('pegawai_jabatan') is-invalid @enderror"
                                        name="pegawai_jabatan" value="{{ old('pegawai_jabatan', $pegawai->pegawai_jabatan) }}" required
                                        autocomplete="pegawai_jabatan" autofocus>

                                    @error('pegawai_jabatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pegawai_umur" class="col-md-4 col-form-label text-md-right">{{ __('Pegawai Umur') }}</label>

                                <div class="col-md-6">
                                    <input id="pegawai_umur" type="number" class="form-control @error('pegawai_umur') is-invalid @enderror"
                                        name="pegawai_umur" value="{{ old('pegawai_umur', $pegawai->pegawai_umur) }}" required
                                        autocomplete="pegawai_umur" autofocus>

                                    @error('pegawai_umur')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pegawai_alamat" class="col-md-4 col-form-label text-md-right">{{ __('Pegawai Alamat') }}</label>

                                <div class="col-md-6">
                                    <input id="pegawai_alamat" type="text" class="form-control @error('pegawai_alamat') is-invalid @enderror"
                                        name="pegawai_alamat" value="{{ old('pegawai_alamat', $pegawai->pegawai_alamat) }}" required
                                        autocomplete="pegawai_alamat" autofocus>

                                    @error('pegawai_alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="m-2 p-2">
                    <form method="POST" action="{{ route('pegawais.destroy', $pegawai->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete {{ $pegawai->name }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

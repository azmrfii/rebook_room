@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Halaman Ruangan</h1>
    @if (Session::get('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Form Tambah Ruangan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('listPenggunaAdministrasi.store') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" placeholder="nama lengkap" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Username</label>
                        <input type="text" name="username" placeholder="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>List Ruangan</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->nama_lengkap }}</td>
                            <td>{{ $item->username }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<form action="{{ route('listPenggunaAdministrasi.store') }}" method="post">
    @csrf
    @method('POST')
    <label for="">Nama Lengkap</label>
    <input type="text" name="nama_lengkap" placeholder="nama lengkap">
    <br>
    <label for="">Username</label>
    <input type="text" name="username" placeholder="username">
    <br>
    <label for="">password</label>
    <input type="password" name="password">
    <br>
    <button type="submit">simpan</button>
</form>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        @foreach ($data as $item)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $item->nama_lengkap }}</td>
            <td>{{ $item->username }}</td>
            <td>
                {{-- <form action="{{ route('listPenggunaAdministrasi.destroy', $item->id) }}" method="POST">
                    <a href="{{ route('listPenggunaAdministrasi.edit', $item->id) }}" class="btn btn-warning">edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus {{ $item->username }}?')">Hapus</button>
                </form> --}}
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
</table>
@endsection

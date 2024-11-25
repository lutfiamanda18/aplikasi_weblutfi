@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 100px;">
    <h1 class="text-center mb-4">Daftar Postingan</h1>

    <!-- Form Pencarian -->
    <form action="{{ route('posts') }}" method="GET" class="mb-4">
        <div class="input-group search-bar">
            <input type="text" name="search" class="form-control" placeholder="Cari judul atau kategori..." value="{{ request('search') }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </div>
    </form>

    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-4 add-post-btn">Tambah Postingan</a>

    <table class="table table-hover post-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                        @if ($post->image)
                            <img src="{{ asset('images/posts/' . $post->image) }}" alt="{{ $post->title }}" class="img-thumbnail" width="100">
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-info">Detail</a>
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus postingan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
</div>

<!-- Tambahkan gaya CSS -->
<style>
    /* Gaya untuk form pencarian */
    .search-bar input {
        border-radius: 30px 0 0 30px;
    }

    .search-bar .btn-primary {
        border-radius: 0 30px 30px 0;
        background-color: #007bff;
        color: #fff;
        transition: background-color 0.3s ease;
    }

    .search-bar .btn-primary:hover {
        background-color: #0056b3;
    }

    /* Gaya untuk tombol tambah postingan */
    .add-post-btn {
        border-radius: 20px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .add-post-btn:hover {
        background-color: #0069d9;
        color: #fff;
    }

    /* Gaya untuk tabel postingan */
    .post-table {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .post-table th {
        background-color: #007bff;
        color: #fff;
        font-weight: 600;
        text-transform: uppercase;
    }

    .post-table td {
        vertical-align: middle;
    }

    .post-table tr:hover {
        background-color: #f1f1f1;
    }

    /* Gaya untuk tombol aksi */
    .btn-warning {
        background-color: #f0ad4e;
        border: none;
        border-radius: 10px;
        color: #fff;
        transition: background-color 0.3s ease;
    }

    .btn-warning:hover {
        background-color: #ec971f;
    }

    .btn-danger {
        background-color: #d9534f;
        border: none;
        border-radius: 10px;
        color: #fff;
        transition: background-color 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #c9302c;
    }
</style>

@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Template Surat</h1>
    <a href="{{ route('template-surats.create') }}" class="btn btn-primary">Tambah Template</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($templates as $template)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $template->judul }}</td>
                <td>
                    <a href="{{ route('template-surats.show', $template) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('template-surats.edit', $template) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('template-surats.destroy', $template) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
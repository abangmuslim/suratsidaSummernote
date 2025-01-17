@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Template Surat</h1>
    <form action="{{ route('template-surats.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" id="judul" required>
        </div>
        <div class="mb-3">
            <label for="konten" class="form-label">Konten</label>
            <textarea name="konten" class="form-control" id="konten" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('template-surats.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection

@section('scripts')
<script>
    // Inisialisasi Summernote
    $(document).ready(function() {
        $('#konten').summernote({
            height: 300, // Tinggi editor
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Template Surat</h1>
    <div class="card mt-4">
        <div class="card-header">
            <h2>{{ $templateSurat->judul }}</h2>
        </div>
        <div class="card-body" id="printArea">
            <!-- Proses untuk menampilkan konten dengan tag </p> dihapus -->
            {!! str_replace('</p>', '', $templateSurat->konten) !!}
        </div>
    </div>
    <button class="btn btn-primary mt-3" onclick="printSurat()">Cetak Surat</button>
    <a href="{{ route('template-surats.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection

@section('scripts')
<script>
    function printSurat() {
        // Dapatkan elemen untuk dicetak
        var printContent = document.getElementById('printArea').innerHTML;

        // Membuat window baru untuk mencetak
        var printWindow = window.open('', '', 'height=600,width=800');
        printWindow.document.write('<html><head><title>Cetak Surat</title>');
        printWindow.document.write('</head><body>');
        printWindow.document.write(printContent);
        printWindow.document.write('</body></html>');
        printWindow.document.close(); // Tutup dokumen
        printWindow.print(); // Jalankan fungsi cetak
    }
</script>
@endsection

<!DOCTYPE html>
<html>

<head>
    <!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css')}}">
<!-- CodeMirror -->
<link rel="stylesheet" href="{{ asset('plugins/codemirror/codemirror.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/codemirror/theme/monokai.css')}}">
<!-- SimpleMDE -->
<link rel="stylesheet" href="{{ asset('plugins/simplemde/simplemde.min.css')}}">
<!-- include libraries(jQuery, bootstrap) -->
<script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- include summernote css/js-->
<link href="summernote-bs5.css" rel="stylesheet">
<script src="summernote-bs5.js"></script>
    <title>Template Surat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @media print {
            body * {
                visibility: hidden;
            }

            #printArea,
            #printArea * {
                visibility: visible;
            }

            #printArea {
                position: absolute;
                top: 0;
                left: 0;
            }
        }
    </style>
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<!-- Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">

<!-- Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Template Surat</a>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script> -->
    
        <!-- jQuery (Jika belum ada) -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    @yield('scripts')

</body>

</html>



<!-- jQuery -->

<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- CodeMirror -->
<script src="{{ asset('plugins/codemirror/codemirror.js')}}"></script>
<script src="{{ asset('plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{ asset('plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{ asset('plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
    $(function() {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });

        $(document).ready(function() {
            $('#summernote').summernote();
        });
    })
</script>
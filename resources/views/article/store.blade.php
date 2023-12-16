@extends('home.index')
@section('title', './create [Santiago Calligari]')
@section('body')
    <script src=" https://cdn.jsdelivr.net/npm/markdown-it@13.0.2/dist/markdown-it.min.js "></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            document.getElementById('markdownFile').addEventListener('change', handleFileSelect);

            function handleFileSelect(event) {
                const file = event.target.files[0];

                if (file) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        const markdownText = e.target.result;
                        renderMarkdown(markdownText);
                    };

                    reader.readAsText(file);
                }
            }

            function renderMarkdown(markdownText) {
                const previewContainer = document.getElementById('preview');

                // Utiliza una biblioteca de procesamiento de Markdown, como 'markdown-it'
                const md = window.markdownit();
                const html = md.render(markdownText);

                previewContainer.innerHTML = html;
            }
        });
    </script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }

        #preview {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f8f8f8;
            white-space: pre-wrap;
        }
    </style>
    <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" id="markdownFile" name="file" accept=".md, .txt">
        <div id="preview"></div>
        <input type="submit" value="Create"></input>
    </form>
@endsection

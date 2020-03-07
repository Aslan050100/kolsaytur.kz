<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@if(isset($canonical))
        <link rel="canonical" href="{{ $canonical }}" />
    @endif
    {!! SEO::generate() !!}
</head>
<body>
<div id="app">
    <app></app>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>


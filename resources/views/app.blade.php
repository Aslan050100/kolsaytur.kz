<html>
<head>
    @if(isset($canonical))
        <link rel="canonical" href="{{ $canonical }}" />
    @endif
    {!! SEO::generate() !!}
</head>
<body>
<div id="app">
    <app></app>
</div>
<script src="js/app.js"></script>
</body>
</html>


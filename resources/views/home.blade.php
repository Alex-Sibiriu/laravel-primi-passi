@include('partials.head')

<body class="bg-danger-subtle">

    @include('partials.navbar')

    <div class="container py-4">
        <h1 class="fw-bold d-inline-block">Laravel Primi Passi</h1>
        <h2>Benvenuto <span class="fst-italic text-secondary">{{ $name }} {{ $surname }}</span></h2>
    </div>
</body>
</html>

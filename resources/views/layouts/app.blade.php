<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Periksa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Aplikasi Periksa</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('periksa.create') }}">Tambah Periksa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dokter.create') }}">Tambah Dokter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('unit_kerja.create') }}">Tambah Unit Kerja</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pesan Baru dari Form Kontak</title>
</head>
<body>
    <h2>Pesan dari {{ $nama }}</h2>

    <p>{{ $email }}</p>
    @if(!empty($perusahaan))
        <p>{{ $perusahaan }}</p>
    @endif
    @if(!empty($telepon))
        <p>{{ $telepon }}</p>
    @endif

    <p></p>
    <p>{{ $pesan }}</p>
</body>
</html>

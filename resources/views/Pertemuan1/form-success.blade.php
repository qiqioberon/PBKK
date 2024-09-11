<!DOCTYPE html>
<html>

<head>
    <title>Form Success</title>
</head>

<body>
    <h1>Formulir Berhasil Dikirim</h1>
    <p><strong>Nama:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Pesan:</strong> {{ $data['message'] }}</p>
    <a href="{{ route('form.show') }}">Kembali</a>
</body>

</html>
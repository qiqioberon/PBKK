<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
</head>

<body>
    <h1>Formulir Kontak</h1>
    <form action="{{ route('form.handle') }}" method="POST">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
        @error('name')
        <div>{{ $message }}</div>
        @enderror

        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}">
        @error('email')
        <div>{{ $message }}</div>
        @enderror

        <br>

        <label for="message">Pesan:</label>
        <textarea id="message" name="message">{{ old('message') }}</textarea>
        @error('message')
        <div>{{ $message }}</div>
        @enderror

        <br>

        <button type="submit">Kirim</button>
    </form>
    <br>
    <br>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Peserta Baru</h2>
    <a href="{{ route('peserta.index') }}" class="btn btn-primary mb-3">Kembali</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada masalah dengan input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('peserta.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nim" class="form-label"><strong>NIM:</strong></label>
            <input type="text" name="nim" class="form-control" placeholder="NIM">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label"><strong>Nama:</strong></label>
            <input type="text" name="nama" class="form-control" placeholder="Nama">
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label"><strong>Jurusan:</strong></label>
            <input type="text" name="jurusan" class="form-control" placeholder="Jurusan">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
</body>
</html>

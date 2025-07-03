<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Data Peserta</h2>
    <a href="{{ route('peserta.create') }}" class="btn btn-success mb-3">Tambah Peserta</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($peserta as $key => $pst)
        <tr>
            <td>{{ $peserta->firstItem() + $key }}</td>
            <td>{{ $pst->nim }}</td>
            <td>{{ $pst->nama }}</td>
            <td>{{ $pst->jurusan }}</td>
            <td>
                <form action="{{ route('peserta.destroy',$pst->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('peserta.edit',$pst->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $peserta->links() !!}
</div>
</body>
</html>

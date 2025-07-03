<?php
// app/Http/Controllers/PesertaController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class PesertaController extends Controller
{
    public function index()
{
    $peserta = Peserta::paginate(10);
    return view('peserta.index', compact('peserta'));
}

public function create()
{
    return view('peserta.create');
}

public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'nim' => 'required|unique:peserta',
        'jurusan' => 'required'
    ]);

    Peserta::create($request->all());
    return redirect()->route('peserta.index')->with('success', 'Peserta berhasil ditambahkan.');
}

public function edit(Peserta $peserta)
{
    return view('peserta.edit', compact('peserta'));
}

public function update(Request $request, Peserta $peserta)
{
    $request->validate([
        'nama' => 'required',
        'nim' => 'required|unique:peserta',
        'jurusan' => 'required'
    ]);

    $peserta->update($request->all());
    return redirect()->route('peserta.index')->with('success', 'Peserta berhasil diperbarui.');
}

public function destroy(Peserta $peserta)
{
    $peserta->delete();
    return redirect()->route('peserta.index')->with('success', 'Peserta berhasil dihapus.');
}
}


<?php
// app/Models/Peserta.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'peserta';
    protected $fillable = ['nim', 'nama', 'jurusan'];
}

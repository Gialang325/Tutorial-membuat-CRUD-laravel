<?php
// Tempatkan file kode ini di dalam folder projek-laravel\App\Models
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projek extends Model
{
    use HasFactory;

    protected $table = 'projek';
    protected $fillable = [
        'nama',
        'kelas',
        'jurusan',
    ];
}


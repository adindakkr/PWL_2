<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_models'; //menunjukkan nama table
    //protected $primaryKey = 'id';
    //protected $keyType = 'int'; 
    protected $fillable = [ //menentukan kolom dari table mana yang bisa diinputkan pada database
        'nim',
        'nama',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'hp'
    ];
}

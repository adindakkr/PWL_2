<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaModel extends Model
{
    use HasFactory;
    protected $table = 'keluarga'; //menunjukkan nama table
    //protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = [ //menentukan kolom dari table mana yang bisa diinputkan pada database
        'id',
        'nama',
        'peran',
        'tgl_lahir',
        'pekerjaan',
    ];
}

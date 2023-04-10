<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatkulModel extends Model
{
    use HasFactory;
    protected $table = 'matkul'; //menunjukkan nama table
    //protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = [ //menentukan kolom dari table mana yang bisa diinputkan pada database
        'id',
        'nama_matkul',
        'dosen',
        'sks',
    ];
}

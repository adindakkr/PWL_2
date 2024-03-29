<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HobiModel extends Model
{
    use HasFactory;
    protected $table = 'hobi'; //menunjukkan nama table
    //protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = [ //menentukan kolom dari table mana yang bisa diinputkan pada database
        'id',
        'jenis',
        'nama_hobi',
        'status',
    ];
}

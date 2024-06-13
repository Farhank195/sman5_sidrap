<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    use HasFactory;
    protected $table = 'profil';
    protected $fillable = ['nama', 'jabatan', 'mapel', 'email', 'no_hp'];
    public $timestamps = false;
}

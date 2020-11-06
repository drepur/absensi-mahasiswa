<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = "tbljadwal";

    protected $fillable = ['kelas_id','matakuliah_id','nidn','noruang','hari','sesi'];
}

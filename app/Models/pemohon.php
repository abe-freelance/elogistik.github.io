<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemohon extends Model
{
    use HasFactory;
    protected $fillable =['nomor_permohonan','tipe_permohonan','latar_belakang','tujuan'];
    protected $table = 'pemohon';
    public $timestamps = false;
}

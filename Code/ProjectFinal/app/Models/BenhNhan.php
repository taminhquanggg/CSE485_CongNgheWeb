<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenhNhan extends Model
{
    use HasFactory;
    public $primaryKey = 'MaBN';

    protected $fillable = ['MaBN', 'TenBN', 'CCCD', 'NgaySinh', 'GioiTinh', 'QueQuan'];

    public function PhieuXN() {
        return $this->hasMany('App\Models\PhieuXN');
    }
}

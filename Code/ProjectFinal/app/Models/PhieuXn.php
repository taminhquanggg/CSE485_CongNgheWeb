<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BenhNhan;

class PhieuXn extends Model
{
    use HasFactory;

    public $primaryKey = 'MaPhieu';

    protected $fillable = ['MaPhieu', 'MaBN', 'TenXN', 'NgayXN', 'KetQuaXN', 'ChiPhi'];

    public function BenhNhan() {
        return $this->hasOne('App\Models\BenhNhan');
    }
}

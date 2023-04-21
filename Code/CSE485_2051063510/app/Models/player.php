<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    use HasFactory;

    public $primaryKey = 'p_id';

    protected $fillable = ['p_id','team_id','p_fullname','p_sex','p_dob','p_dob','p_birthplace','p_shirtnumber'];

    public function team() {
        return $this->hasOne('App\Models\team', 'team_id', 'team_id');
    }
}

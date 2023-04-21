<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;

    public $primaryKey = 'team_id';

    protected $fillable = ['team_id','team_name','founded_year'];

}

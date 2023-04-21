<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\theloai;
use Post;

class theloaiController extends Controller
{
    public function addTheLoai() {
        $theloaiObj = new theloai();
        $theloaiObj->ten_tloai = 'nhac tre';
        $theloaiObj->save();

    }

    public function getallTheLoai() {
        $theloai = theloai::get();
        dd($theloai);
    }
}

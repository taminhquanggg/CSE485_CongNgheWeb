<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($username) {
        return view('profile', ['user'=>$username]);
    }
}

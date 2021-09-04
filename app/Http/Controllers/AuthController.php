<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return ([
            'NIS' => '3103119117',
            'Nama' => 'Muhammad Chairul Anam',
            'Gender' => 'Pria',
            'Phone' => '082137917717',
            'Class' => 'XII RPL 4'
        ]);
    }
}

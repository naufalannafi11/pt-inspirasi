<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $logos = [
            '/img/logo1.png',
            '/img/logo2.png',
            '/img/logo3.png',
            '/img/logo4.png',
            '/img/logo5.png',
            '/img/logo6.png',
            '/img/logo7.png',
            '/img/logo8.png',
            '/img/logo9.png',
            '/img/logo10.png',
            '/img/logo11.png',
            '/img/logo12.png',
            '/img/logo13.png',
            '/img/logo14.png',
            '/img/logo15.png',
            '/img/logo16.png',
            '/img/logo17.png',
            '/img/logo18.png',
            '/img/logo19.png',
            '/img/logo20.png',
            // Tambahkan URL logo lainnya sesuai kebutuhan
        ];

        return view('home', compact('logos'));
    }
}

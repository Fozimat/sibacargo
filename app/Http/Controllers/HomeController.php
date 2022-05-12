<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function sejarah_perusahaan()
    {
        return view('frontend.sejarah');
    }

    public function visi()
    {
        return view('frontend.visi');
    }

    public function cabang()
    {
        return view('frontend.cabang');
    }

    public function manajemen()
    {
        return view('frontend.manajemen');
    }

    public function legalitas()
    {
        return view('frontend.legalitas');
    }

    public function mitra()
    {
        return view('frontend.mitra');
    }

    public function portfolio()
    {
        return view('frontend.portfolio');
    }

    public function videos()
    {
        return view('frontend.videos');
    }



    public function blog()
    {
        return view('frontend.blog');
    }
}

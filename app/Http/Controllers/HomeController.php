<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pesan;
use App\Models\Postingan;
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
        $postingan_terbaru = Postingan::with(['kategori'])->orderBy('tanggal_posting', 'DESC')->take(6)->get();
        return view('frontend.index', compact(['postingan_terbaru']));
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

    public function layanan()
    {
        return view('frontend.layanan');
    }

    public function blog()
    {
        $postingan = Postingan::orderBy('tanggal_posting', 'DESC')->paginate(4);
        $postingan_terbaru = Postingan::orderBy('tanggal_posting', 'DESC')->take(4)->get();
        $kategori = Kategori::with(['postingan'])->get();
        return view('frontend.blog', compact(['postingan', 'kategori', 'postingan_terbaru']));
    }

    public function show($slug)
    {
        $postingan_terbaru = Postingan::orderBy('tanggal_posting', 'DESC')->take(4)->get();
        $kategori = Kategori::with(['postingan'])->get();
        $postingan = Postingan::with(['kategori'])->where('slug', $slug)->first();
        return view('frontend.blog-detail', compact(['postingan', 'kategori', 'postingan_terbaru']));
    }

    public function kontak()
    {
        return view('frontend.kontak');
    }

    public function store_pesan(Request $request)
    {
        Pesan::create($request->all());
        return redirect()->route('kontak')->with('flash', 'Pesan berhasil dikirim');
    }
}

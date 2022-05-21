<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kategori;
use App\Models\Postingan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormPostinganRequest;

class PostinganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postingan = Postingan::with(['kategori'])->orderBy('tanggal_posting', 'DESC')->get();
        return view('backend.postingan.index', compact(['postingan']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('backend.postingan.create', compact(['kategori']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormPostinganRequest $request)
    {
        $gambar = $request->file('gambar');
        $nama_gambar = time() . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('postingan'), $nama_gambar);
        $data = [
            'id_kategori' => $request->id_kategori,
            'penulis' => $request->penulis,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'deskripsi' => $request->deskripsi,
            'tanggal_posting' => $request->tanggal_posting,
            'gambar' => $nama_gambar,
        ];
        Postingan::create($data);
        return redirect()->route('postingan.index')->with('flash', 'Postingan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $postingan = Postingan::findOrFail($id);
        return view('backend.postingan.edit', compact(['kategori', 'postingan']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postingan $postingan)
    {
        $postingan->delete();
        return redirect()->route('postingan.index')->with('flash', 'Postingan berhasil dihapus');
    }
}

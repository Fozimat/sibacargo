<?php

namespace App\Http\Controllers;

use App\Models\JadwalKapal;
use App\Models\MTC;
use App\Models\Pesan;
use App\Models\Kategori;
use App\Models\Postingan;
use App\Models\RuteKapal;
use App\Models\TarifBarang;
use Illuminate\Http\Request;
use App\Models\KabupatenKota;
use App\Models\TarifKendaraan;
use App\Models\TarifElektronik;
use App\Models\PesananSibacargo;

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

    public function tracking()
    {
        return view('frontend.tracking');
    }

    public function process_tracking(Request $request)
    {
        $resi = PesananSibacargo::with(['daerahAsal', 'daerahTujuan', 'kustomer'])->where('resi', $request->resi)->first();
        $mtc = MTC::with(['status_manifest'])->where('resi', $request->resi)->orderBy('id', 'DESC')->get();
        return view('frontend.tracking', compact(['resi', 'mtc']));
    }

    public function tarif()
    {
        $kabupaten_kota = KabupatenKota::orderBy('nama', 'ASC')->get();
        return view('frontend.tarif', compact(['kabupaten_kota']));
    }

    public function process_tarif(Request $request)
    {
        $kabupaten_kota = KabupatenKota::orderBy('nama', 'ASC')->get();
        $kota_asal = $request->kota_asal;
        $kota_tujuan = $request->kota_tujuan;
        $asal = KabupatenKota::where('id', $kota_asal)->pluck('nama');
        $tujuan = KabupatenKota::where('id', $kota_tujuan)->pluck('nama');
        $pengiriman = $request->pengiriman;
        if ($pengiriman == 'kendaraan') {
            $query = TarifKendaraan::with(['daerahAsal', 'daerahTujuan'])->where('daerah_asal', $kota_asal)->where('daerah_tujuan', $kota_tujuan)->get();
        } else if ($pengiriman == 'barang') {
            $query = TarifBarang::with(['daerahAsal', 'daerahTujuan'])->where('daerah_asal', $kota_asal)->where('daerah_tujuan', $kota_tujuan)->get();
        } else if ($pengiriman == 'elektronik') {
            $query = TarifElektronik::with(['daerahAsal', 'daerahTujuan'])->where('daerah_asal', $kota_asal)->where('daerah_tujuan', $kota_tujuan)->get();
        }
        return view('frontend.tarif', compact(['asal', 'tujuan', 'kabupaten_kota', 'pengiriman', 'query']));
    }

    public function jadwal_kapal()
    {
        $rute_kapal = RuteKapal::orderBy('rute', 'DESC')->orderBy('id', 'ASC')->get();
        return view('frontend.jadwal-kapal', compact(['rute_kapal']));
    }

    public function process_jadwal_kapal(Request $request)
    {
        $rute_kapal = RuteKapal::orderBy('rute', 'DESC')->orderBy('id', 'ASC')->get();
        $rute_request = $request->rute;
        $rute_only = RuteKapal::where('id', $rute_request)->pluck('rute');
        $jadwal_kapal = JadwalKapal::with(['ruteKapal'])->where('rute_kapal_id', $rute_request)->get();
        return view('frontend.jadwal-kapal', compact(['rute_only', 'rute_kapal', 'jadwal_kapal', 'rute_request']));
    }

    public function kartu_setia()
    {
        return view('frontend.kartu-setia');
    }

    public function karir()
    {
        return view('frontend.karir');
    }

    public function store_pesan(Request $request)
    {
        Pesan::create($request->all());
        return redirect()->route('kontak')->with('flash', 'Pesan berhasil dikirim');
    }
}

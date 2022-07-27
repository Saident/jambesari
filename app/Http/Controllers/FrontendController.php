<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function indexHomepage()
    {
        return view("frontend.index", ["title" => "Beranda"]);
    }

    public function profilDesa() {
        return view("frontend.profil", ["title" => "Profil Desa"]);
    }

    public function strukturDesa() {
        return view("frontend.struktur", ["title" => "Struktur Desa"]);
    }

    public function galeriDesa() {
        return view("frontend.galeri", ["title" => "Galeri"]);
    }

    public function layananDesa() {
        return view("frontend.layanan", ["title" => "Layanan NIK"]);
    }

    public function kontakDesa() {
        return view("frontend.kontak", ["title" => "Kontak"]);
    }

    public function indexBerita()
    {
        return view("frontend.berita", ["title" => "Berita"]);
    }

    // satu berita
    public function isiBerita()
    {
        return view("frontend.page.berita.one", ["title" => "Judul Berita"]);
    }

    public function indexBumdes()
    {
        return view("frontend.page.lembaga.bumdes", ["title" => "BUMDes"]);
    }

    public function indexProgram()
    {
        return view("frontend.program", ["title" => "Program Desa"]);
    }
}

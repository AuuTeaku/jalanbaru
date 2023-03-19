<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        //Menampilkan semua isi
        $artikels = Artikel::latest()->get();
        return view ('artikels.index', compact('artikels'));
    }
    public function create()
    {
        return view('artikels.create');
    }
}

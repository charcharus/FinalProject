<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\KomentarPertanyaan;
use App\User;
use App\Pertanyaan;
use DB;

class KomentarPertanyaanController extends Controller
{
    public function store(Request $request)
    {
        $komentarpertanyaan = new KomentarPertanyaan();
        $komentarpertanyaan->id = $request->id;
        $komentarpertanyaan->isi = $request->isi;
        $komentarpertanyaan->user_id = $request->user_id;
        $komentarpertanyaan->pertanyaan_id = $request->pertanyaan_id;
        $komentarpertanyaan->save();

        return redirect()->route('komentarpertanyaan.index', $request->get('pertanyaan_id'));
    }

    public function index($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        $komentarpertanyaan = KomentarPertanyaan::all();

        return view('komentarpertanyaan.index', compact('pertanyaan', 'komentarpertanyaan'));
    }
}

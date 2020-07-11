<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use App\Jawaban;
use DB;

class KomentarJawabanController extends Controller
{
    public function store(Request $request)
    {
        $komentarjawaban = new KomentarJawaban();
        $komentarjawaban->id = $request->id;
        $komentarjawaban->isi = $request->isi;
        $komentarjawaban->user_id = $request->user_id;
        $komentarjawaban->jawaban_id = $request->jawaban_id;
        $komentarjawaban->save();

        return redirect()->route('komentarjawaban.index', $request->get('jawaban_id'));
    }

    public function index($id)
    {
        $jawaban = Jawaban::find($id);
        $komentarjawaban = KomentarJawaban::all();

        return view('komentarjawaban.index', compact('jawaban', 'komentarjawaban'));
    }
}

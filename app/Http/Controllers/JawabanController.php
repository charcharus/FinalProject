<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use App\Pertanyaan;
use App\Jawaban;
use DB;

class JawabanController extends Controller
{
    public function store(Request $request)
    {
        $jawaban = new Jawaban();
        $jawaban->id = $request->id;
        $jawaban->isi = $request->isi;
        $jawaban->user_id = $request->user_id;
        $jawaban->pertanyaan_id = $request->pertanyaan_id;
        $jawaban->save();

        return redirect()->route('jawaban.index', $request->get('pertanyaan_id'));
    }

    public function index($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        $jawaban = Jawaban::all();

        return view('jawaban.index', compact('pertanyaan', 'jawaban'));
    }
}

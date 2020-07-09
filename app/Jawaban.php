<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban';
    protected $fillable = ['id', 'user_id', 'pertanyaan_id', 'isi'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function pertanyaan()
    {
    	return $this->belongsTo(Pertanyaan::class);
    }

    public function komentar_jawaban()
    {
    	return $this->hasMany(KomentarJawaban::class);
    }

    public function vote_jawaban()
    {
    	return $this->hasMany(VoteJawaban::class);
    }
}

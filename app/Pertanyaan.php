<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['id', 'user_id', 'judul', 'isi', 'tag'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function jawaban()
    {
    	return $this->hasMany(Jawaban::class);
    }

    public function komentar_pertanyaan()
    {
    	return $this->hasMany(KomentarPertanyaan::class);
    }

    public function vote_pertanyaan()
    {
    	return $this->hasMany(VotePertanyaan::class);
    }
}

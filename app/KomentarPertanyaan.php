<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KomentarPertanyaan extends Model
{
    protected $table = 'komentar_pertanyaan';

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function pertanyaan()
    {
    	return $this->belongsTo(Pertanyaan::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KomentarJawaban extends Model
{
    protected $table = 'komentar_jawaban';

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}

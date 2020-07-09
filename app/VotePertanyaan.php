<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VotePertanyaan extends Model
{
    protected $table = 'vote_pertanyaan';

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function pertanyaan()
    {
    	return $this->belongsTo(Pertanyaan::class);
    }
}

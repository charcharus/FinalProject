<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VoteJawaban extends Model
{
    protected $table = 'vote_jawaban';

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function jawaban()
    {
    	return $this->belongsTo(Jawaban::class);
    }
}

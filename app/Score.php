<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $table = 'scores';

    public function student(){
            return $this->belongsTo(Student::class);
     }
}

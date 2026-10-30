<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public function film()
{
    return $this->belongsTo(Film::class);
}
}

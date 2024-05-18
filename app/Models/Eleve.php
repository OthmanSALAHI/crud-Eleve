<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;
    public function club()
    {
        return $this->belongsTo(Club::class);
    }
    public function Activites()
    {
        return $this->beLongsToMany(Activite::class);
    }

}

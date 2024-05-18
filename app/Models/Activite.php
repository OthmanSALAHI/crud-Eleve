<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;
    public function eleves()
    {
        return $this->beLongsToMany(Eleve::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archetype extends Model
{
    use HasFactory;

    public function getOtherAbilitiesAttribute()
    {
        return json_decode($this->other_abilities_json);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    public function weightedRating($weightFactor , $minUsers)
    {
        $weightedRating = ($weightFactor * $this->avg_rating) + ((1 - $weightFactor) * ($this->user_number / ($this->user_number + $minUsers)));
        return $weightedRating;
    }
}

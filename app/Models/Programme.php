<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    protected function casts()
    {
        return [
            'programme_date' => 'date',
        ];
    }

    public function programImages()
    {
        return $this->hasMany(ProgramImage::class);
    }

    public function programArtists()
    {
        return $this->hasMany(ProgramArtist::class);
    }
}

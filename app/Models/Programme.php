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
}

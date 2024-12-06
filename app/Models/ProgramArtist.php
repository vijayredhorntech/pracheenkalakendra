<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProgramArtist extends Model
{
    public function programme(): BelongsTo
    {
        return $this->belongsTo(Programme::class);
    }
}

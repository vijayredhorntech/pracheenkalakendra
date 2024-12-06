<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProgramImage extends Model
{

    protected $fillable = ['programme_id', 'programme_images'];

    public function programme(): BelongsTo
    {
        return $this->belongsTo(Programme::class);
    }
}

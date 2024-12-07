<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerStats extends Model
{
    protected $table = 'banner_stats';
    protected $fillable = ['title', 'description', 'status'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentAchievements extends Model
{
    protected $table = 'student_achievements';
    protected $fillable = ['title', 'description', 'image'];
}

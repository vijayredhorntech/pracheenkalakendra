<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected function casts()
    {
        return [
            'notification_date' => 'date',
        ];
    }
}

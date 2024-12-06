<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotificationRequest extends FormRequest
{
    public function rules()
    {
        return [
            $this->validate([
                'notification_title' => 'required',
                'notification_date' => 'required|date',
            ])
        ];
    }

    public function authorize()
    {
        return true;
    }
}

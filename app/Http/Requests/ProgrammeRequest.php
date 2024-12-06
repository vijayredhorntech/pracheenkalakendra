<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgrammeRequest extends FormRequest
{
    public function rules()
    {
        return [
            $this->validate([
                'programme_title' => 'required',
                'programme_description' => 'required',
                'programme_location' => 'required',
                'programme_date' => 'required|date|after:today',
                'programme_time' => '',
            ])
        ];
    }

    public function authorize()
    {
        return true;
    }
}

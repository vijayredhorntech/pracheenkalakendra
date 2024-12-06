<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
{
    public function rules()
    {
        return [
            $this->validate([
                'member_name' => 'required',
                'member_occupation' => 'required',
                'member_designation' => 'required',
                'member_type' => 'required',
            ])
        ];
    }

    public function authorize()
    {
        return true;
    }
}

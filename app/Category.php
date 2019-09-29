<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function rules()
    {
        return [
            'name' => 'required|unique:categories|max:255',
        ];
    }
}

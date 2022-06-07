<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class AddWatchListRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'movieId' => [
                'required', 
                'integer', 
                'exists:movies,id',
                Rule::unique('watch_lists','movie_id')->where(function ($query) {
                    return $query->where('user_id', Auth::id())->where('movie_id', $this->request->get('movieId'));
                }),
            ],
        ];
    }
}

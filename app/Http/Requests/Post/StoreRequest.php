<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // preguntas si el usuario tiene permiso para hacer esta peticion, por ejemplo.
        // return auth()->user()->can('create', Post::class);
        // o si el usuario es admin
        // return auth()->user()->isAdmin();
        // o si el usuario es un rol especifico
        // return auth()->user()->hasRole('admin');
        // o si el usuario tiene un permiso especifico
        // return auth()->user()->hasPermission('create-post');


        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:500',
            'slug' => 'required|min:3|max:500|unique:posts,slug',
            'content' => 'required|min:7',
            'description' => 'required|min:7',
            'category_id' => 'required|exists:categories,id',
            'posted' => 'required|in:yes,no',
        ];
    }
}

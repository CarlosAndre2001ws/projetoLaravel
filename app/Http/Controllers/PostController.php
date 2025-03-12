<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use App\Models\User;

class PostController extends Controller
{
    public function store(StorePostRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255|string',
            'email' => 'required|unique:email'
        ]);

        if($validator->fails()){
            return redirect('/dev')
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $request->validated();

        return $request;
    }

    public function secondValidation(StorePostRequest $request): View
    {
        $user = Auth::user();

        $validated = $request->validated();

        return view('dev');
    }
}

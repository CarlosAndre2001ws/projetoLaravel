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
    public function store(StorePostRequest $request): RedirectResponse
    {
//        $validator = Validator::make($request->all(), [
//            'title' => 'required|unique:posts|max:255|string',
//            'email' => 'required|email',
//            'cc_number' => 'numeric',
//        ]);
//
//        if($validator->fails()){
//            return redirect('/dev')
//                ->withErrors($validator)
//                ->withInput();
//        }
//
//        $validated = $request->validated();
        Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255|string',
            'email' => 'required|email',
            'cc_number' => 'numeric',
        ])->validate();

        return redirect('/dev');
    }

    public function secondValidation(StorePostRequest $request): View
    {
        $user = Auth::user();

        $validated = $request->validated();

        return view('dev');
    }
}

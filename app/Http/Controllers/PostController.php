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
    public function _construct(){}

    public function store(Request $request): RedirectResponse
    {
//        $validator = Validator::make($request->all(), [
//            'title' => 'required|unique:posts|max:255|string',
//            'email' => 'required|email',
//            'cc_number' => 'numeric',
//        ]);

//        if($validator->stopOnFirstFailure()->fails()){
//            return redirect('/dev')
//                ->withErrors($validator)
//                ->withInput();
//        }

//        return redirect('/dev')->withErrors($validated, 'store');
//        return $request;
//        Validator::make($request->all(), [
//            'title' => 'required|unique:posts|max:255|string',
//            'email' => 'required|email',
//            'cc_number' => 'numeric',
//        ])->validate();
//
//        return redirect('/dev');

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255|string',
            'email' => 'required|email',
            'cc_number' => 'numeric',
        ]);


        return redirect('/dev')->withErrors($validator, 'login');
    }

    public function secondValidation(StorePostRequest $request): View
    {
        $user = Auth::user();

        $validated = $request->validated();

        return view('dev');
    }
}

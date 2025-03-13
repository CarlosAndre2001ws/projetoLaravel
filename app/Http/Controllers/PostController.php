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

    public function store(Request $request)
    {
//        $validated = $request->validated();
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255|string',
            'email' => 'required|email',
            'cc_number' => 'numeric',
        ]);

//        $rules = [
//            'title' => 'required|unique:posts|max:255|string',
//            'email' => 'required|email',
//            'cc_number' => 'numeric',
//        ];

//        $validated = Validator::make($request->all(), [
//            'title' => 'required|unique:posts|max:255|string',
//            'email' => 'required|email',
//            'cc_number' => 'numeric',
//        ]);
//        $validated = Validator::make($rules, $messages = [
//            'required' => 'O campo :attribute é obrigatório',
//        ]);

        if($validator->stopOnFirstFailure()->fails()){
            return redirect('/dev')
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();

        return redirect('/dev')->withErrors($validated, 'store');
//        return $request;
    }

    public function secondValidation(StorePostRequest $request): View
    {
        $user = Auth::user();

        $validated = $request->validated();

        return view('dev');
    }
}

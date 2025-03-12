<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function store(Request $request): View
    {
        $validated = $request->validate([
            'title' => 'bail|required|unique:posts|max:255',
            'email' => 'required|email',
        ]);

        return view('dev');
    }

    public function secondValidation(Request $request): View
    {
        $validated = $request->validateWithBag('post', [
            'title' => ['bail|required', 'unique:posts', 'max:255'],
            'email' => ['required', 'email:unique'],
        ]);

        return view('dev');
    }
}

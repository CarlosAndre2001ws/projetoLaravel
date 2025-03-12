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
            'title' => 'required|unique:posts|max:255',
            'email' => 'required|email',
        ]);

        return view('dev');
    }
}

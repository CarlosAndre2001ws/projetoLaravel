<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function store(StorePostRequest $request): View
    {
        $validated = $request->validated();

        return view('dev');
    }

    public function secondValidation(Request $request): View
    {
        $validated = $request->validated();
        return view('dev');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;

class PostController extends Controller
{
    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();

        $payment = $request->all('payment');

        return $request;
    }

    public function secondValidation(StorePostRequest $request): View
    {
        $user = Auth::user();

        $validated = $request->validated();

        return view('dev');
    }
}

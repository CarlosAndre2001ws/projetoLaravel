<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{

    public function destroy($id): string
    {
        User::destroy($id);
        return 'O usuário foi destruído com sucesso';
    }

    public function index(): RedirectResponse
    {
        return redirect()->route('home');
    }

    public function teste()
    {
        return redirect()->route('nome', ['user' => 1]);
    }

    public function show(User $user): View
    {
        return view('index', ['user' => $user->name]);
    }
}

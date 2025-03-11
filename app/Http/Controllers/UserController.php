<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        //redirect with controller
        return view('index', ['user' => $user->name]);
    }

    public function showSession(Request $request): View
    {
        $user = User::find(1);

        session()->pull('user');
//        session()->put('user', $user);

        return view('profile', ['user' => $user], ['request' => $request]);
    }

    public function redirectAction(): string
    {
        return redirect()->action(
            [UserController::class, 'index']
        );
    }

    //Passing data through view
    public function username(): View
    {
        return view('username', [
            'user' => 'Marlos Johnson',
            'occupation' => 'astronaut',
            'records' => 111,
            'i' => 2,
            'users' => ['carlos', 'andre', 'artur', 'rodrigo', 'fabio', 'felipe'],
            'userTeste' => 'artur',
        ]);
    }
}

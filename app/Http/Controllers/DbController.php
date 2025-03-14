<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $affected = DB::update(
            'update users set name = ? where id = ?',
            ['Nome Alterado', 52]
        );

        $data = DB::select('select * from users');
//        $data = DB::select('select * from users where id = :id', ['id' => 1]);
//        return view('db.index', ['data' => $data]);
//        DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['Exemplo', 'exemplodasilva@email.com', '123']);
        return view('db.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}

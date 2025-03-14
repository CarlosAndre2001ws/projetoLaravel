<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $affected = DB::update(
//            'update users set name = ? where id = ?',
//            ['Nome Alterado', 52]
//        );
//        $deleted = DB::delete('delete from users where id = ?', [52]);
//        $data = DB::select('select * from users');
//        $data = DB::select('select * from users where id = :id', ['id' => 1]);
//        return view('db.index', ['data' => $data]);
//        you can use php artisan db:show to display the database
//        you can also use php artisan db:show --database=databaseName to display a specific database
//        php artisan db:show --counts --views displays the number of views and rows
//        DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['Exemplo', 'exemplodasilva@email.com', '123']);
//        $tables = Schema::getTables();
//        $views = Schema::getViews();
//
//        $columns = Schema::getColumns('users');
//
//        $indexes = Schema::getIndexes('users');
//
//        $foreignKeys = Schema::getForeignKeys('users');
//
//        php artisan db:table users displays an overview of an individual table in the database
        $users = DB::table('users')->get();

        return view('db.index', ['data' => $users]);
//          return $tables;
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

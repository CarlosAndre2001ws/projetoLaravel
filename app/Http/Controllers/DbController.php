<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
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
//        $users = DB::table('users')->get();

//        this is to find the first user with the name Carlos André
//        $users = DB::table('users')->where('name', 'Carlos André')->first();

//        this is to find the first user with the name Carlos André and only retrieve the name column
//        $users = DB::table('users')->where('name', 'Carlos André')->value('name');

//        this is to find the value by its id
//        $users = DB::table('users')->find(1);

//        this gets all the values from a single column
//        $users = DB::table('users')->pluck('name', 'email');

//        DB::table("users")->orderBy("id", "desc")->chunk(3, function (Collection $users) {
//            foreach ($users as $user) {
//                 echo "<li>".$user->name."</li>";
//            }
//            return false;
//        });

//        DB::table("users")->where('active', false)
//        ->chunkById(10, function (Collection $users) {
//            foreach ($users as $user) {
//                DB::table('users')
//                    ->where('id', $user->id)
//                    ->update(['active' => true]);
//            }
//        });

//        $users = DB::table('users')->count();
//        $users = DB::table('users')->max('id');

//        $users = DB::table('users')
//            ->where('name', 'LIKE',  'C%')
//            ->max('id');

//        $users = [];
//
//        if(DB::table('users')->where('name', 'Carlos André')->exists()){
//            $users = ['Exists' => 'I exist !'];
//        }

//        $users = DB::table('users')
//            ->select('name', 'email as user_email')
//            ->get();
//        dd($users);

//        $query = DB::table('users')->select('name');
//
//        $users = $query->addSelect('email')->get();
//
//        dd($users);

//        $users = DB::table('users')->distinct()->get();
//
//        dd($users);

//        $users = DB::table('users')
//            ->select(DB::raw('count(*) as user_count, name'))
//            ->where('name', '<>', 'Carlos André')
//            ->groupBy('id')
//            ->get();
        // i dont get this one
//        $users = DB::table('users')
//            ->selectRaw('name * ? as user_name', ['Carlos André'])
//            ->get();

//        $users = DB::table('users')
//            ->where('name', '=', 'Carlos André')
//            ->where('email', 'like', 'admin%')
//            ->get();

//        $users = DB::table('users')
//            ->where('name', 'Carlos André')
//            ->get();

//        $users = DB::table('users')
//            ->where('name', '!=', 40)
//            ->get();

//        $users = DB::table('users')
//            ->where([
//                ['name', '=', 'Carlos André'],
//                ['email', 'like', 'admin%']
//            ])->get();

//        $users = DB::table('users')
//            ->where('name', 'Borzoi')
//            ->orWhere('name', 'LIKE', 'Maria%')
//            ->get();

//        $users = DB::table('users')
//            ->where('name', 'Borzoi')
//            ->orWhere(function (Builder $query){
//                $query->where('name', 'LIKE', 'Maria%');
//            })
//            ->get();

//        $users = DB::table('users')
//            ->whereNot(function(Builder $query) {
//                $query->whereNotNull('email_verified_at');
//            })
//            ->get();

//        $users = DB::table('users')
//            ->where('email_verified_at', '!=', null)
//            ->whereAny([
//                'name',
//                'email',
//                'password',
//            ], 'like', '%car%')
//            ->get();

//        $users = DB::table('users')
//            ->where('email_verified_at', '!=', null)
//            ->whereNone([
//                'name',
//                'email',
//                'password',
//            ], 'like', '%car%')
//            ->get();

//        $users = DB::table('users')
//            ->whereLike('name', '%ma%')
//            ->get();

//        $users = DB::table('users')
//        ->whereLike('name', '%ma%', caseSensitive: true)
//        ->get();

//        $users = DB::table('users')
//            ->where('name', 'Borzoi')
//            ->orWhereLike('email', '%bo%')
//            ->get();

//        $users = DB::table('users')
//            ->whereNotLike('name', '%bor%')
//            ->get();

//        $users = DB::table('users')
//            ->where('email', 'jonson@email.com')
//            ->orWhereNotLike('name', '%los%')
//            ->get();

//        $users = DB::table('users')
//            ->WhereIn('id', [1, 2, 3, 33, 42 , 4, 37])
//            ->get();

//        $users = DB::table('users')
//            ->WhereNotIn('id', [1, 2, 3])
//            ->get();

//        $verifiedEmails = DB::table('users')->select('id')
//            ->where('email_verified_at', '!=', 'null');
//
//        $users = DB::table('users')
//            ->whereIn('id', $verifiedEmails)
//            ->get();

//        $users = DB::table('users')
//            ->whereBetween('id', [10, 30])
//            ->get();

//        $users = DB::table('users')
//            ->whereNotBetween('id', [10, 30])
//            ->get();

//        $users = DB::table('users')
//            ->whereNull('email_verified_at')
//            ->get();

//        $users = DB::table('users')
//            ->whereNotNull('email_verified_at')
//            ->get();

//        $users = DB::table('users')
//            ->whereDate('created_at', '2025-03-14')
//            ->get();

//        $users = DB::table('users')
//            ->whereMonth('created_at', '03')
//            ->get();

//        $users = DB::table('users')
//            ->whereDay('created_at', '26')
//            ->get();

//        $users = DB::table('users')
//            ->whereYear('created_at', '2025')
//            ->get();

//        $users = DB::table('users')
//            ->whereTime('created_at', '=', '16:36:30')
//            ->get();

//        $users = DB::table('users')
//            ->wherePast('created_at')
//            ->get();

//        $users = DB::table('users')
//            ->whereFuture('fake_teste_data')
//            ->get();

//        $invoices = DB::table('invoices')
//            ->whereNowOrPast('due_at')
//            ->get();
//
//        $invoices = DB::table('invoices')
//            ->whereNowOrFuture('due_at')
//            ->get();

//        $invoices = DB::table('invoices')
//            ->whereTodayOrBefore('due_at')
//            ->get();
//
//        $invoices = DB::table('invoices')
//            ->whereTodayOrAfter('due_at')
//            ->get();



        dd($users);

//        return view('db.index', ['data' => $users]);
//          return $users;
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

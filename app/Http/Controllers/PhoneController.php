<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('phones.index', ['dados' => Auth::user()->with('phone')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'user_id' => 'unique'
        ]);

        Phone::updateOrInsert([
            'user_id' => Auth()->user()->id,
            'number' => $request->number,
            'label' => 'generic'
        ]);
        redirect()->route('phones.show', ['phone' => Auth()->user()->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $user = Auth::user();

        $user->load('phone');

        return view('phones.show', ['dados' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

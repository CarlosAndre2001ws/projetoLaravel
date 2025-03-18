@extends('layouts.app')
@section('content')
    @foreach ($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
    {{ $users->links('pagination::bootstrap-5') }}
@endsection

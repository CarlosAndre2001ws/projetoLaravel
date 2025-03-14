@extends('layouts.app')
@section('content')
    {{ $deleted }}
    @foreach($data as $dado)
        <p>{{ $dado->name }}</p>
    @endforeach
@endsection

@extends('layouts.app')
@section('content')
    @foreach($data as $dado)
        <p>{{ $dado->name }}</p>
    @endforeach
@endsection

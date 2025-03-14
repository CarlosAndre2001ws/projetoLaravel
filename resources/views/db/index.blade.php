@extends('layouts.app')
@section('content')
@foreach($data as $dado)
    <li>{{ $dado->name }}</li>
@endforeach
@endsection

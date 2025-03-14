@extends('layouts.app')
@section('content')
@foreach($data as $dado)
    @foreach($dado as $valores)
        <li>{{ $valores }}</li>
    @endforeach
@endforeach
@endsection

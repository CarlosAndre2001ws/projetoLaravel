@extends('layouts.app')
@section('content')
    teste
{{ $request->session()->get('user', 'dammit') }}
@endsection

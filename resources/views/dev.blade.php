@extends('layouts.app')
@section('content')
    <form action="/foo/bar" action="/profile">
        @csrf
        @method('PUT')
        <label for="title">Post Title</label>

        <input
            id="title"
            type="text"
            class="@error('title') is-invalid @enderror"
        >

        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="email">Email address</label>

        <input
            id="email"
            type="email"
            class="@error('email', 'login') is-invalid @enderror"
        />
    </form>

    @error('email', 'login')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    @push('scripts')
        <script src="{{ asset('js/alert.js') }}"></script>
    @endpush
@endsection

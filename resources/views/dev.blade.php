@extends('layouts.app')
@section('content')
    <div class="form-control container">
        <form action="/dev/post" action="POST">
            @csrf
            @method('PUT')
            <label for="title">Post Title</label>

            <input
                id="title"
                name="title"
                type="text"
                class="form-control @error('title') is-invalid @enderror"
            >


            <label for="email">Email address</label>

            <input
            id="email"
            name="email"
            type="email"
            class="form-control @error('email', 'login') is-invalid @enderror"
            />
            <button class="btn btn-primary m-2 col-3">Entrar</button>
        </form>
{{--        @error('title')--}}
{{--        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--        @enderror--}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

{{--    @error('email', 'login')--}}
{{--        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--    @enderror--}}

{{--    @push('scripts')--}}
{{--        <script src="{{ asset('js/alert.js') }}"></script>--}}
{{--    @endpush--}}

{{--    @pushIF($amIScared, 'scripts')--}}
{{--        <script src="{{ asset('js/sream.js') }}"></script>--}}
{{--    @endpushif--}}

{{--    @push('scripts')--}}
{{--        <script src="{{ asset('js/second.js') }}"></script>--}}
{{--    @endpush--}}

{{--    @prepend('scripts')--}}
{{--        <script src="{{ asset('js/first.js') }}"></script>--}}
{{--    @endprepend--}}
@endsection

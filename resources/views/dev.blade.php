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
                value="{{ old('title') }}"
                class="form-control @error('title') is-invalid @enderror"
            >


            <label for="email">Email address</label>

            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email') }}"
                class="form-control @if($errors->has('email')) {{ $errors->has('title') ? '' : 'is-invalid' }} @endif"
            />
            {{--            <label for="payment-method">Payment Type</label>--}}
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" value="pix" id="pix">
                <label class="form-check-label" for="pix">
                    PIX
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" value="cc" id="cc" checked>
                <label class="form-check-label" for="cc">
                    Credit Card
                </label>
            </div>

            <label class="form-label" for="cc_number">Credit Card Number</label>
            <input type="text" class="form-control @error('cc_number') is-invalid @enderror" name="cc_number" id="cc_number">

            <label for="date">Date</label>

            <input id="date" name="date" class="form-control @error('date') is-invalid @enderror" type="date">

            <button class="btn btn-primary m-2 col-3">Entrar</button>
        </form>
        {{--        @error('title')--}}
        {{--        <div class="alert alert-danger">{{ $message }}</div>--}}
        {{--        @enderror--}}
        a{{ $errors->login->any() }}a
        @if ($errors->login->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->login->all() as $error)
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

@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('phones.store') }}" method="post">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="title" class="form-label">Novo número:</label>
                <input type="text" name="number" id="number" placeholder="(__) ____-_____" class="form-control">
            </div>
            <button type="submit" class="btn btn-outline-success">Postar</button>
        </form>
        {{--        @error('title')--}}
        {{--            <div class="alert alert-danger">{{ $caught }}</div>--}}
        {{--        @enderror--}}
        {{--        @isset($error)--}}
        {{--            {{ $error }}--}}
        {{--PERGUNTAR ESSAS PARADAS PARA O RODRIGO --}}
        {{--        @endisset--}}
    </div>

    <script>
        $(document).ready(function($){
            $('#number').mask('(99) 9999-99999');
        });
    </script>
@endsection



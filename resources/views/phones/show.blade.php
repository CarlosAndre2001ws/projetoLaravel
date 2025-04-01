@extends('layouts.app')
@section('content')

    {{ $dados }}

    @if( $dados != null && isset($dados->phone) )
        <div class="container">
            <table class="table table-primary table-striped table-hover table-bordered table-sm align-middle caption-top">
                <!--table-borderless / table-sm reduz o padding pela metade -->
                <thead class="table-dark">
                <tr>
                    <th>User</th>
                    <th>User's Phone Number</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dados as $dado)
                    <tr>
                        <td>{{ $dado->name }}</td>
                        <td>{{ $dado->phone->number }}</td>
                    </tr>
                @endforeach
                </tbody>
                <caption class="text-center">Título da Tabela</caption>
            </table>
        </div>
    @endif
    <div class="container">
        <a href="{{ route('phones.create') }}" class="btn btn-primary">Adicionar novo número</a>
    </div>
@endsection

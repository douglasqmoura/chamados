@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <h1>Lista de Chamados</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Solicitação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($chamados as $chamado)
                        <tr>
                            <th scope="row"> {{ $chamado->id }}</th>
                            <td>{{ $chamado->solicitacao }}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>


            </div>
        </div>
@endsection

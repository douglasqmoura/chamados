@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">


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
                        <th scope="col">Aberto em</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Solicitante</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($chamados as $chamado)
                        <tr>
                            <th scope="row"> {{ $chamado->id }}</th>
                            <td>{{ date('d-m-Y', strtotime($chamado->created_at)) }}</td>
                            <td>{{ $chamado->categoria->nome }}</td>
                            <td>{{ $chamado->usuario->name }}</td>
                            <td>Aberto</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>



        </div>
@endsection

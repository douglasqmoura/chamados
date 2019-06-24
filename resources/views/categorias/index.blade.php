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
                <h1>Lista de Categorias</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Categoria</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categorias as $categoria)
                        <tr>
                            <th scope="row"> {{ $categoria->id }}</th>
                            <td>{{ $categoria->nome }}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>


            </div>
        </div>
@endsection

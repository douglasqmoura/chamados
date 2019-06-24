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
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row"> {{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td> {{$user->email }}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>


            </div>
        </div>
@endsection

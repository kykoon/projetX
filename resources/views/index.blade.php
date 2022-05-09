@extends('template')

@section('content')

<style>
    .uper {
        margin-top: 40px;
    }
</style>

<div class="uper">


    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br />
    @endif

    <header class="uper-header">
        <a class="btn btn-primary" href="{{ route('clients.create') }}">Créer un client</a>
    </header>

    <table class="table table-striped">

        <thead>
            <tr>
                <td>ID</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Date de Naissance</td>
                <td>Categorie</td>
                <td colspan="2">Action</td>
            </tr>
        </thead>

        <tbody>
            @foreach($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->Nom }}</td>
                <td>{{ $client->Prenom }}</td>
                <td>{{ $client->DateNaissance }}</td>
                <td>{{ $client->Categorie_id }}</td>

                <td><a href="{{ route('clients.edit', $client->id)}}" class="btn btn-primary">Modifier</a></td>
                <td>
                    <form action="{{ route('clients.destroy', $client->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        @endsection
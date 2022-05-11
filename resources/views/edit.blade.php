@extends('template')

@section('content')

<style>
    .uper {
        margin-top: 40px;
    }
</style>

<div class="card uper">
    <div class="card-header">
        Modifier le client
    </div>

    <div class="card-body">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif

        <form method="post" action="{{ route('clients.update', $client->id ) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="Nom">Nom :</label>
                <input type="text" class="form-control" name="Nom" value="{{ $client->Nom }}" />
            </div>

            <div class="form-group">
                <label for="Prenom">Prenom :</label>
                <input type="text" class="form-control" name="Prenom" value="{{ $client->Prenom }}" />
            </div>

            <div class="form-group">
                <label for="DateNaissance">Date de Naissance</label>
                <div class="control">
                    <input class="input" type="date" name="DateNaissance" value="{{ $client->DateNaissance }}" min="1950-01-01" max="{{ date('Y-m-d') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="label">Catégorie</label>
                <div class="select">
                    <select name="categorie_id">
                        @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->Libelle }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</div>
@endsection
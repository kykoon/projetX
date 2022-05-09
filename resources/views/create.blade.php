@extends('template')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>

<div class="card uper">
    <div class="card-header">
        Ajouter un client
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

        <form method="post" action="{{ route('clients.store') }}">
            . @csrf
            <div class="form-group">
                <label for="Nom">Nom du client:</label>
                <input type="text" class="form-control" name="Nom" />
            </div>

            <div class="form-group">
                <label for="Prenom">Prenom du client:</label>
                <input type="text" class="form-control" name="Prenom" />
            </div>

            <div class="form-group">
                <label class="label">Date de Naissance</label>
                <div class="control">
                    <input class="input" type="date" name="DateNaissance" value="{{ old('DateNaissance') }}" min="1950-01-01" max="{{ date('Y-m-d') }}">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</div>
@endsection
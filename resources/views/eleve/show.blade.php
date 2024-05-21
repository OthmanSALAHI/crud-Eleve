@extends('eleve.layout')
@section('title', 'index')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Eleve</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">id eleve:</label>
                        <input type="text" class="form-control" id="name" value="{{ $eleve->id }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">nom:</label>
                        <input type="text" class="form-control" id="name" value="{{ $eleve->nom }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="prenom">prenom:</label>
                        <input type="text" class="form-control" id="prenom" value="{{ $eleve->prenom }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="club">club:</label>
                        <input type="text" class="form-control" id="club" value="{{ $club->nom }}" readonly>
                    </div>

                    <a href="{{ route('eleves.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
        <div class="container">
            <h1>Activite Information</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Date de Début</th>
                            <th>Nombre de Jours</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($eleve->activites as $activity)
                        <tr>
                            <td>{{ $activity->description }}</td>
                            <td>{{ $activity->date_debut }}</td>
                            <td>{{ $activity->nombreJours }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="alert alert-info">
                <p><strong>Nombre total des jours:</strong> 
                    {{ $eleve->activites->sum('nombreJours') }}
                </p>
            </div>
        </div>
    </div>
@endsection
 
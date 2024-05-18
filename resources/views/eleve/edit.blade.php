@extends('eleve.layout')
@section('title', 'edit eleve ' . $eleve->nom . ' ' . $eleve->prenom)
@section('content')
    <div class="container">
        <h1>Create Eleve</h1>
        <form action="{{ route('eleves.update', $eleve->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="nom" value="{{ $eleve->nom }}" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="age">Prenom</label>
                <input type="text" name="prenom" value="{{ $eleve->prenom }}" id="prenom" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="club">Club</label>
                <select name="club" id="club" class="form-control" required>
                    <option value="">-- Select Club --</option>
                    @foreach ($clubs as $club)
                        <option value="{{ $club->id }}" {{ $club->id == $eleve->club_id ? 'selected' : '' }}>{{$club->id}} {{ $club->nom }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

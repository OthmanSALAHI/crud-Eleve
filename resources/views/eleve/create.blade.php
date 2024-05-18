@extends('eleve.layout')
@section('title','add new eleve')
@section('content')
    <div class="container">
        <h1>Create Eleve</h1>
        <form action="{{ route('eleves.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">nom</label>
                <input type="text" name="nom" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="age">prenom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="age">club</label>
                <select name="club" id="" class="form-control" required>
                    <option value="">--select club--</option>
                    @foreach ($clubs as $club)
                    <option value="{{$club->id}}"> {{$club->id}} {{$club->nom}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
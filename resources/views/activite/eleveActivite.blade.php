@extends('eleve.layout')
@section('title','index')
@section('content')
<div class="container mt-5">
    <h2>Assign Activity to Eleve</h2>
    <form action="{{route('eleveActiviteStore')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="eleve_id">Eleve</label>
            <select class="form-control" id="eleve_id" name="eleve_id" required>
                @foreach ($eleves as $eleve)
                   <option value="{{$eleve->id}}">{{$eleve->nom}} {{$eleve->prenom}}</option> 
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="activite_id">Activite</label>
            <select class="form-control" id="activite_id" name="activite_id" required>
                @foreach ($activites as $act)
                   <option value="{{$act->id}}">{{$act->description}}</option> 
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Assign</button>
    </form>
</div>
@endsection
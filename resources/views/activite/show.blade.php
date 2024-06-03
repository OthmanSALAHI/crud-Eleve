@extends('eleve.layout')
@section('title','index')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Description</th>
            <th>Date de début</th>
            <th>Nombre de jours</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$activite->id}}</td>
            <td>{{$activite->description}}</td>
            <td>{{$activite->date_debut}}</td>
            <td>{{$activite->nombreJours}}</td>
        </tr>
    </tbody>
</table>
<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>club id</th>
        </tr>
    </thead>
    <tbody>
        @php($total = 0)
        @foreach ($activite->eleves as $eleve)
            <tr>
                <td>{{$eleve->id}}</td>
                <td>{{$eleve->nom}}</td>
                <td>{{$eleve->prenom}}</td>
                <td>{{$eleve->club_id}}</td>
                @php($total += 1)
            </tr>
            @endforeach
    </tbody>
</table>
<div class="alert alert-info">
    <p><strong>Nombre total des eleves:</strong> 
        {{$total}}
    </p>
</div>
@endsection
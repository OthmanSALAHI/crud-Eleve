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
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @php($total = 0)
        @foreach ($activite as $act)
        <tr>
            <td>{{$act->id}}</td>
            <td>{{$act->description}}</td>
            <td>{{$act->date_debut}}</td>
            <td>{{$act->nombreJours}}</td>
            <td>
                <a href="{{route('activite.show',$act->id)}}" style="display:inline;">
                    <button type="submit" class="btn btn-primary">show</button>
                </a>
            </td>
            @php($total += $act->nombreJours)
        </tr>
        @endforeach
    </tbody>
</table>
<div class="alert alert-info">
    <p><strong>Nombre total des jours:</strong> 
        {{$total}}
    </p>
</div>
@endsection
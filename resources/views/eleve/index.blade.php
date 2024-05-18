@extends('eleve.layout')
@section('title','index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Eleves</h1>
                <a href="{{route('eleves.create')}}" class="btn btn-primary">Add</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>club</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($eleves as $eleve)
                            <tr>
                                <td>{{$eleve->id}}</td>
                                <td>{{$eleve->nom}}</td>
                                <td>{{$eleve->prenom}}</td>
                                <td>{{ $clubs->where('id', $eleve->club_id)->first()->nom }}</td>
                                <td>
                                    <a href="{{route('eleves.edit',$eleve->id)}}" class="btn btn-warning">Edit</a>
                                    <form action="{{route('eleves.destroy',$eleve->id)}}" method="post" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this record?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    <a href="{{route('eleves.show',$eleve->id)}}" style="display:inline;">
                                        <button type="submit" class="btn btn-primary">show</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>   
@endsection
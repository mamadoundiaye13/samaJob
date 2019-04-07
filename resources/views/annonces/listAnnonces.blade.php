@extends('layouts.app')

@section('content')
    <table>
        <tr>
            <th>Id</th>
            <th>domaine</th>
            <th>Mission</th>
            <th>profil</th>
            <th>niveau</th>
            <th>date</th>
            <th>duree</th>
            <th>renumeration</th>
            <th>localisation</th>
        </tr>

        @foreach($annonces as $annonce)
            <tr>
                <td>{{$annonce->id}}</td>
                <td>{{$annonce->domaine}}</td>
                <td>{{$annonce->mission}}</td>
                <td>{{$annonce->profil}}</td>
                <td>{{$annonce->niveau}}</td>
                <td>{{$annonce->debut}}</td>
                <td>{{$annonce->duree}}</td>
                <td>{{$annonce->remuneration}}</td>
                <td>{{$annonce->localisation}}</td>

                <td><a href="{{ route('show', ['id' => $annonce->id]) }}">Voir</a></td>
                <td><a href="{{ route('edit', ['id' => $annonce->id]) }}">Modifier</a></td>
                <td><a href="{{ route('destroy', ['id' => $annonce->id]) }}">Supprimer</a></td>
            </tr>
        @endforeach
    </table>

@endsection

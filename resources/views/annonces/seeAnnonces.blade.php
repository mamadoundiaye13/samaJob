@extends('layouts.app')

@section('content')
    @foreach($annonces as $annonce)

        <h1> domaine: {{$annonce->domaine}}</h1>
        <p> mission: {{$annonce->mission}}</p>
        <p> profil: {{$annonce->profil}}</p>
        <h1> niveau: {{$annonce->niveau}}</h1>
        <p>debut : {{$annonce->debut}}</p>
        <p> duree: {{$annonce->duree}}</p>
        <p> remuneration: {{$annonce->remuneration}}</p>
        <p>localisation: {{$annonce->localisatio}}</p>
        <p> créé le : {{$annonce->created_at}}</p>
    @endforeach
@endsection

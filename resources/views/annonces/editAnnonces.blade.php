@extends('layouts.app')

@section('content')
    @foreach($annonces as $annonce)
        {!! Form::open(['route' => ['update', $annonce->id], 'method' => 'PUT']) !!}}
        {{ Form::text('domaine', $annonce->domaine, ['placeholder' => "Domaine de la formation", 'required' => 'required']) }} <br/><br/>
        {{ Form::text('mission', $annonce->mission, ['placeholder' => "La Mission de l'étudiant", 'required' => 'required']) }} <br/><br/>
        {{ Form::text('profil', $annonce->profil, ['placeholder' => "Profil_recherche", 'required' => 'required']) }} <br/><br/>
        {{ Form::text('niveau', $annonce->niveau, ['placeholder' => "Niveau_études", 'required' => 'required']) }} <br/><br/>
        {{ Form::date('debut', $annonce->debut, ['placeholder' => "Date_de_début", 'required' => 'required']) }} <br/><br/>
        {{ Form::number('duree', $annonce->duree, ['placeholder' => "Durée_stage", 'required' => 'required']) }} <br/><br/>
        {{ Form::number('remuneration', $annonce->remuneration, ['placeholder' => "Rémunération", 'required' => 'required']) }} <br/><br/>
        {{ Form::text('localisation', $annonce->localisation, ['placeholder' => "Infos localisation", 'required' => 'required']) }} <br/><br/>
        {{ Form::submit("Modifier") }} <br/><br/>
        {!! Form::close() !!}
    @endforeach
@endsection

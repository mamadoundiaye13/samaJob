@extends('layouts.app')

@section('content')
    {!! Form::open(['action' => 'AnnoncesController@store', 'method' => 'POST']) !!}
        {{ Form::text('domaine', null, ['placeholder' => "Domaine de la formation", 'required' => 'required']) }} <br/><br/>
        {{ Form::text('mission', null, ['placeholder' => "La Mission de l'étudiant", 'required' => 'required']) }} <br/><br/>
        {{ Form::text('profil', null, ['placeholder' => "Profil_recherche", 'required' => 'required']) }} <br/><br/>
        {{ Form::text('niveau', null, ['placeholder' => "Niveau_études", 'required' => 'required']) }} <br/><br/>
        {{ Form::date('debut', null, ['placeholder' => "Date_de_début", 'required' => 'required']) }} <br/><br/>
        {{ Form::number('duree', null, ['placeholder' => "Durée_stage", 'required' => 'required']) }} <br/><br/>
        {{ Form::number('remuneration', null, ['placeholder' => "Rémunération", 'required' => 'required']) }} <br/><br/>
        {{ Form::text('localisation', null, ['placeholder' => "Infos localisation", 'required' => 'required']) }} <br/><br/>
        {{ Form::submit("Ajouter") }} <br/><br/>

    {!! Form::close() !!}



@endsection

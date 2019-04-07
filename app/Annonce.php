<?php

namespace samaJob;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable = ['domaine', 'mission', 'profil', 'niveau', 'debut', 'duree', 'remuneration', 'localisation'];

}

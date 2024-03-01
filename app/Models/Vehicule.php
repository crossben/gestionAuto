<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable =
    [
    	'id',
        'marque',
        'modele',
        'matricule',
        'carburant',
        'assurances',
        'numassurances',
        'type',
        'kilometrage',
        'nombreplaces',
        'puissance',
        'photos',
    ];
}

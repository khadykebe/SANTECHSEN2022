<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_page extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomType',
        'dateCreation',
        'status',
        'idUtilisateur',
    ];

    public function service(){
        return $this->hasOne(Service::class);
    }

    public function utilisateur(){

        return $this->belongsTo(Utilisateur::class);
    }

}

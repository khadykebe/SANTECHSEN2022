<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePage extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomType',
        'dateCreation',
        'status',
        'idUtilisateur',
    ];

    public function page(){
        return $this->hasOne(Page::class);
    }

    public function utilisateurs(){

        return $this->belongsTo(Utilisateur::class);
    }

}

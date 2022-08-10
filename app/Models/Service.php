<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomService',
        'contenue',
        'image',
        'cout',
        'dateCreation',
        'status',
        'idTypeService',
        'idUtilisateur',
    ];

    public function typepage(){
        return $this->belongsTo(TypePage::class);
    }

    public function utilisateure(){
        return $this->belongsTo(Utilisateur::class);
    }

    public function demande(){
        return $this->hasOne(DemandeService::class);
    }

    
}

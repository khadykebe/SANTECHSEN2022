<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'adresse',
        'photo',
        'status',
    ];

    public function profil(){
        return $this->belongsTo(Profil::class);
    }

    public function Service(){
        return $this->hasOne(Service::class);
    }

    public function typepage(){
        return $this->hasOne(TypePage::class);
    }

    public function slide(){
        return $this->hasOne(Slide::class);
    }
}

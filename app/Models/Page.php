<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenue',
        'image',
        'date',
        'idTypePage',
        'idUtilisateur'
    ];

    public function typepage(){
        return $this->belongsTo(Typepage::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partenair extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomPartenaire',
        'emailPartenaire',
        'password',
        'telephone',
        'logo',
    ];
}

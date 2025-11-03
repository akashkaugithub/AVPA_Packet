<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrustedProject extends Model
{
    use HasFactory;

     protected $table = 'trustedproject';  

    // Mass Assignment (fillable) Columns
    protected $fillable = [
        'name',
        'description',
        'status',
        'trusted_clients',
        'finished_projects',
        'year_of_experience',
        'visited_experience',
    ];
}

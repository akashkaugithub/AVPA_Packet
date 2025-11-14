<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuickLink extends Model
{
    use HasFactory;

    protected $table = 'quick_links';

    protected $fillable = [
        'title',
        'date',
        'link',
        'delete_status',
        'block_status',
    ];
}

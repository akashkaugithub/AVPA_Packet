<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsRoom extends Model
{
    use HasFactory;

    protected $table = 'news_room';

    protected $fillable = [
        'title',
        'date',
        'link',
        'delete_status',
        'block_status',
    ];
}

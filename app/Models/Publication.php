<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    protected $table = 'publication';

    protected $fillable = [
        'title',
        'type', 
        'level', 
        'indexing', 
        'doi', 
        'publisher',
        'month',
        'year' 
    ];
}

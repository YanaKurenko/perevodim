<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //use HasFactory;
    protected $table = 'services';
    public $timestamps = true;
    
    protected $fillable = [
        'id',
        'title',
        'icon',
        'description',
        'is_prom'
    ];


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    public $timestamps = true;
    
    protected $fillable = [
        'id',
        'title'
    ];

    public function menu_items()
    {
        return $this->hasMany(Page::class);
    }
}

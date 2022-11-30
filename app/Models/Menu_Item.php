<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu_Item extends Model
{
    //use HasFactory;
    protected $table = 'menu__items';
    public $timestamps = true;
    
    protected $fillable = [
        'title',
        'menu_id',
        'parent_id'
    ];

        public function children()
    {
        return $this->hasMany(Menu_Item::class);
    }

        public function parent()
    {
        return $this->belongsTo(Menu_Item::class);
    }

        public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    
        public function page()
    {
        return $this->belongsTo(Page::class);
    }
}

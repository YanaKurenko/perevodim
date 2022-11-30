<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //use HasFactory;
    protected $table = 'pages';
    public $timestamps = true;

    protected $fillable = [
        'title',
        'body',
        'menu__items_id'
    ];

    public function accordions()
    {
        return $this->belongsToMany(Accordion::class, 'page_accordion', 'page_id', 'accordion_id');
    }

    public function menu_item()
    {
        return $this->hasOne(Menu_Item::class);
    }

}

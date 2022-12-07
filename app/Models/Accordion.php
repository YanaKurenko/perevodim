<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Accordion extends Model
{
    //use HasFactory;
    protected $table = 'accordions';
    public $timestamps = true;

    protected $fillable = [
        'title',
        'body'
    ];

    /**
     * @return BelongsToMany
     */
    public function pages(): BelongsToMany
    {
        return $this->belongsToMany(Page::class, 'page_accordion', 'accordion_id', 'page_id');
    }
}

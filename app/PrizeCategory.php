<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrizeCategory extends Model
{
    protected $table = 'prizes_categories';
    
    public function category() {
        return $this->belongsTo(Category::class);
    }
}

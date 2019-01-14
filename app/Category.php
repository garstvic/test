<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function categoryPrizes() {
        return $this->hasMany(PrizeCategory::class);
    }
}

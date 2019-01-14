<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    public function prizeCategory() {
        return $this->HasOne(PrizeCategory::class);
    }
}

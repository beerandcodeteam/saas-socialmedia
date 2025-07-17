<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ContentScheduling extends Pivot
{
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}

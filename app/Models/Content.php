<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'tags',
        'type',
    ];

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function files(): HasMany
    {
        return $this->hasMany(File::class);
    }

    public function scheduling(): BelongsToMany
    {
        return $this->belongsToMany(MediaOrganization::class)
            ->withPivot('scheduled_at');
    }
}

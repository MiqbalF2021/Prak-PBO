<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quest extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'question', 'author'
    ];

    /**
     * Get the nama that owns the quest
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function writer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }

    /**
     * Get all of the answer for the quest
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answer(): HasMany
    {
        return $this->hasMany(Answer::class, 'quest_id', 'id');
    }

}

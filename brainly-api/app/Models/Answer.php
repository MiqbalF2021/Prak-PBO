<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'quest_id', 'user_id', 'is_answer'
    ];

    /**
     * Get the answerer that owns the answer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function answerer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

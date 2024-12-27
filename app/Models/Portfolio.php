<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Portfolio extends Model
{
    /** @use HasFactory<\Database\Factories\PortfolioFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'files',
        'original_filenames'
    ];

    protected $casts = [
        'files' => 'array',
        'original_filenames' => 'array',
        'deleted_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

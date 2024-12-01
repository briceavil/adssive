<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class File extends Model
{
    /** @use HasFactory<\Database\Factories\FilesFactory> */
    use HasFactory;

    protected $guarded = ['id', 'timestamps'];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

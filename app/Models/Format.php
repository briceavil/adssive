<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formats extends Model
{
    /** @use HasFactory<\Database\Factories\FormatsFactory> */
    use HasFactory;

    protected $guarded = ['id', 'timestamps'];
}
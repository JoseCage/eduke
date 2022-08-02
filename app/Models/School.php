<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\PrefixedIds\Models\Concerns\HasPrefixedId;

class School extends Model
{
    use HasFactory, HasPrefixedId;

    protected $fillable = [
        'name', 'internal_code', 'slogan',
        'phone', 'email', 'address',
        'logo', 'since'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Normalizer\SlugNormalizer;

class Meal extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'day',
        'type',
        'slug',
    ];
}

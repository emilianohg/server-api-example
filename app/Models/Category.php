<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'image_url',
        'icon_url',
    ];

    public $timestamps = false;

    protected function getImageUrlAttribute($value): string
    {
        return config('app.url') . $value;
    }

    protected function iconUrl(): string
    {
        return config('app.url') . $value;
    }
}
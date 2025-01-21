<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class article extends Model
{
    protected $guarded = [];

    public function categorie()
    {
        return $this->belongsTo(categorie::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function tag()
    {
        return $this->hasMany(tag::class);
    }

    protected static function booted()
    {
        static::deleted(function ($artikel) {
            if ($artikel->image) {
                Storage::disk('public')->delete($artikel->image);
            }
        });
    }
}

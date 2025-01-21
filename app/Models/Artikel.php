<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Artikel extends Model
{
    protected $guarded = [];

    public function categori()
    {
        return $this->belongsTo(categori::class);
    }

    //add observer
    protected static function booted()
    {
        static::deleted(function ($artikel) {
            if ($artikel->foto) {
                Storage::disk('public')->delete($artikel->foto);
            }
        });
    }
}

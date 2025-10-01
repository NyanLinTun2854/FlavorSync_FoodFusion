<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class DietaryPreference extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public $incrementing = false;
    protected $keyType = 'string';

    protected static function booted()
    {
        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = (string) Str::uuid();
            }
        });
    }

    public function recipes()
    {
        return $this->belongsToMany(
            Recipe::class,
            'recipe_dietary_preferences',
            'preference_id',
            'recipe_id'
        )->withTimestamps();
    }
}

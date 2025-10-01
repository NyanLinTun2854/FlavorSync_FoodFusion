<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Nutrition extends Model
{
    use HasFactory;

    protected $table = 'nutritions'; // <-- explicitly set

    protected $fillable = [
        'recipe_id',
        'calories',
        'protein',
        'carbohydrates',
        'fat',
        'fiber'
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

    // Reverse relation
    public function recipe()
    {
        return $this->belongsTo(Recipe::class, 'recipe_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Recipe extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'description',
        'user_id',
        'category_id',
        'difficulty_level_id',
        'ingredients',
        'instructions',
        'prep_time',
        'cook_time',
        'servings',
        'calories',
        'protein',
        'carbohydrates',
        'fat',
        'fiber',
        'image', // for storing recipeImg upload
        'is_approved'
    ];

    // Tell Eloquent that IDs are not incrementing integers
    public $incrementing = false;

    // Tell Eloquent the ID is a string (UUID)
    protected $keyType = 'string';

    protected static function booted()
    {
        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = (string) Str::uuid();
            }
        });
    }

    // Relationships

    public function category()
    {
        return $this->belongsTo(RecipeCategory::class);
    }

    public function difficultyLevel()
    {
        return $this->belongsTo(DifficultyLevel::class);
    }

    public function nutrition()
    {
        return $this->hasOne(Nutrition::class, 'recipe_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * A recipe can have many dietary preferences (many-to-many).
     */
    public function dietaryPreferences()
    {
        return $this->belongsToMany(
            DietaryPreference::class,   // related model
            'recipe_dietary_preferences',       // pivot table
            'recipe_id',                // foreign key on pivot for recipe
            'preference_id'             // foreign key on pivot for dietary preference
        )->withTimestamps();
    }

    public function imageUrl()
    {
        if ($this->image) {
            return Storage::url($this->image);
        }

        return Storage::url('posts/healthy-chicken-chow-mein-134805-1.jpg');
    }
}

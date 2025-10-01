<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;

class CommunityPost extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'image',
        'title',
        'slug',
        'content',
        'user_id',
        'category_id'
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(CommunityCategory::class);
    }

    public function likes()
    {
        return $this->hasMany(CommunityLike::class, 'post_id');
    }

    public function comments()
    {
        return $this->hasMany(CommunityComment::class, 'post_id');
    }


    public function readTime($wordsPerMinute = 100)
    {
        $wordCount = str_word_count(strip_tags($this->content));
        $minutes = ceil($wordCount / $wordsPerMinute);

        return max(1, $minutes);
    }

    public function imageUrl()
    {
        if ($this->image) {
            return Storage::url($this->image);
        }

        return Storage::url('healthy-chicken-chow-mein-134805-1.jpg');
    }
}

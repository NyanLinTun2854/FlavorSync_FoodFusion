<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function posts()
    {
        return $this->hasMany(CommunityPost::class);
    }

    public function following()
    {
        return $this->belongsToMany(User::class, 'community_followers', 'follower_id', 'user_id');
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'community_followers', 'user_id', 'follower_id');
    }

    public function comments()
    {
        return $this->hasMany(CommunityComment::class, 'user_id');
    }


    public function isFollowedBy(?User $user)
    {
        if (!$user) {
            return false; // Guests can’t follow
        }

        return $this->followers()->where('follower_id', $user->id)->exists();
    }

    public function hasLiked(CommunityPost $post)
    {
        return $post->likes()->where('user_id', $this->id)->exists();
    }

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }
}

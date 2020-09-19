<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Cache;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'self_introduction',
        'sex',
        'age',
        'height',
        'blood',
        'adress',
        'job',
        'hobbies',
        'img_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //メッセージ関係 
    public function chatMessages()
    {
        return $this->hasMany('App\ChatMessage');
    }

    public function chatRoomUsers()
    {
        return $this->hasMany('App\ChatRoomUsers');
    }
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    Public function likedBy($user)
    {
        return Like::where('user_id', $user->id)->where('post_id', $this->id);
    }

}

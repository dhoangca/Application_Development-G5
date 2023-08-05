<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable; // Ensure to import Authenticatable from the right namespace
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class UserModel extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $table = "users";

    protected $primaryKey = 'id';

    protected $fillable = ['username', 'password', 'email', 'status', 'role', 'created_at', 'updated_at'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function trainers()
    {
        return $this->belongsToMany(TrainerModel::class, 'user_trainer', 'id', 'trainerId')->withTimestamps();
    }

}

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserProfile extends Authenticatable
{
    protected $table = 'userprofile';
    protected $primaryKey = 'id';
    protected $fillable = ['firstname','lastname','email','phone','address','altphone'];
    use HasFactory;
}



       
<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Register extends Authenticatable
{
    protected $table = 'register';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','password'];
    use HasFactory;
}

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Rating extends Authenticatable
{
    protected $table = 'aboutrate';
    protected $primaryKey = 'id';
    protected $fillable = ['selleractive','monthlyprofit','customeractive','anualgrosssale'];
    use HasFactory;
}

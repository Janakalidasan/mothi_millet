<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Order extends Authenticatable
{
    protected $table = 'storeorder';
    protected $primaryKey = 'id';
    protected $fillable = ['buyer_name','address','phone_no','product_name','kg','quantity','total_price','ordertype','status'];
    use HasFactory;
}



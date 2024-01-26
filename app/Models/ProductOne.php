<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ProductOne extends Authenticatable
{
    protected $table = 'productone';
    protected $primaryKey = 'id';
    protected $fillable = ['product_title','description','imageone','imagetwo','imagethree','discount','price','gst'];
    use HasFactory;
}


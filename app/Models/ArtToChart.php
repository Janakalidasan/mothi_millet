<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ArtToChart extends Authenticatable
{
    protected $table = 'arttochart';
    protected $primaryKey = 'id';
    protected $fillable = ['product_id','product_name','product_price','product_gst'];
    use HasFactory;
}


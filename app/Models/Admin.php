<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'adminprofile';
    protected $primaryKey = 'id';
    protected $fillable = ['admin_id','name','email','phone','dob','gender','image'];
    use HasFactory;
}


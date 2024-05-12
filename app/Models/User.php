<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['role_id', 'gender_id', 'name', 'email', 'password'];

    // Define relationships with other models (if any)
}

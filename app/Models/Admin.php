<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use HasFactory, HasRoles;

    protected $fillable = ['name', 'username', 'email', 'password'];

    protected $hidden = [
        'password',
    ];

    // public function getCreatedAtAttribute($value)
    // {
    //     return Carbon::parse($value)->format('Y-m-d');
    // }

    // Accessors
    protected function createdAt(): Attribute
    {
        return Attribute::make(
            // get: fn ($value) => Carbon::parse($value)->format('Y-m-d h:i'),
            get: fn ($value) => Carbon::parse($value)->format('Y-m-d h:i'),
        );
    }
}

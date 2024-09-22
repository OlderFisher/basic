<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $role
 * @property string $email_verified_at
 */
class Admin extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'admins';

    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
        'role',
        'email_verified_at',

    ];
}

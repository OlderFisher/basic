<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $country
 * @property string $state
 * @property string $city
 * @property string $address
 * @property string $zip
 * @property string $avatar
 * @property string $company_id
 */

class Employee extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'employees';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'country',
        'state',
        'city',
        'address',
        'zip',
        'avatar',
        'company_id',
    ];
}

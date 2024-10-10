<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $country
 * @property string $state
 * @property string $city
 * @property string $address
 * @property string $zip
 * @property string $logo
 * @property string $website
 */

class Company extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'companies';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'country',
        'state',
        'city',
        'address',
        'zip',
        'logo',
        'website',
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}

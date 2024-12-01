<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;

    // Specify the table name (if it doesn't follow Laravel's naming convention)
    protected $table = 'customers';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];

    // Optionally, you can define relationships here if needed
}

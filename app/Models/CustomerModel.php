<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;

    // Specify the table name (if not default 'customers')
    protected $table = 'customers';

    // Specify the primary key (if not default 'id')
    protected $primaryKey = 'id';

    // Allow mass assignment for these attributes
    protected $fillable = ['name', 'email', 'phone'];

    // Optional: Specify if timestamps are enabled (default is true)
    public $timestamps = true;

    // Optional: If your database doesn't use 'created_at' and 'updated_at', you can specify custom column names:
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}

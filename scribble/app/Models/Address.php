<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $primaryKey = 'AddressID'; // Assuming AddressID is the primary key

    // Define a relationship where an address belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class, 'UserID'); // the foreign key in the addresses table
    }
}

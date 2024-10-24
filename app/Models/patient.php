<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'tb_patients';

    // Define the fields that can be mass assigned
    protected $fillable = [
        'Fname',
        'Lname',
        'birth_date',
        'gender',
        'contact_no',
        'addressed',
    ];
}

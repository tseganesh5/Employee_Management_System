<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employees";
    //protected primarykey = "id";
    protected $fillable = ['first_name', 'last_name', 'gender', 'email', 'phone_number', 'date_of_birth', 'address'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        "address",
        "address2",
        "city",
        "country",
        "district",
        "email",
        "logo",
        "name",
        "phone",
        "zipcode",
    ];
}

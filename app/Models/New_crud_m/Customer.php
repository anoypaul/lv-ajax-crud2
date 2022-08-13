<?php

namespace App\Models\New_crud_m;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "customers";
    protected $primaryKey = "customers_id";
    protected $fillable = ["customers_id", "customers_name", "customers_email", "customers_phone"];
}

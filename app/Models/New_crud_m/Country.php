<?php

namespace App\Models\New_crud_m;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = "countries";
    protected $primaryKey = "countries_id";
    protected $fillable = ["countries_id", "countries_name"];
}

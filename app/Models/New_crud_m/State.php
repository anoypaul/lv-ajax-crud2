<?php

namespace App\Models\New_crud_m;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = "states";
    protected $primaryKey = "states_id";
    protected $fillable = ["states_id", "countries_id", "states_name"];

    public function Country(){
        return $this->belongsTo(Country::class, 'countries_id');
    }
}

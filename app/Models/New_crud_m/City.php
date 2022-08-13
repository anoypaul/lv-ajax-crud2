<?php

namespace App\Models\New_crud_m;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = "cities";
    protected $primaryKey = "cities_id";
    protected $fillable = ["cities_id", "states_id", "cities_name"];

    public function State(){
        return $this->belongsTo(State::class, 'states_id');
    }
}

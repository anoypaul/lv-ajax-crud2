<?php

namespace App\Models\New_crud_m;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_detail extends Model
{
    use HasFactory;

    protected $table = "customer_details";
    protected $primaryKey = "customer_details_id";
    protected $fillable = ["customer_details_id", "customers_id", "customer_details_country", "customer_details_state", "customer_details_city"];

    public function Customer(){
        return $this->belongsTo(Customer::class, 'customers_id');
    }
}

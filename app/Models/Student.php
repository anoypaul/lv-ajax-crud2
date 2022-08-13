<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'students_id';
    protected $fillable = ['students_id', 'students_name', 'students_class', 'students_email', 'students_password'];
}

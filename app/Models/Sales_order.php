<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales_order extends Model
{
    use HasFactory;
    protected $table ="sales_orders";
    protected $fillable = [
        'medecine_name',
        'qty',
        'amount',
        'price',
        'patient_name',
        'patient_no',
        'status',
        'medecine_id',
        'date'
    ];


}

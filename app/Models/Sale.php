<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $table ="sales";
    protected $fillable = [
        'medecine_name',
        'qty',
        'invoice',
        'price',
        'balance',
        'payment_mode',
        'patient_type',
        'medecine_id',
        'sales_date',
        'mpesa_code',
        'mpesa_payment',
        'payment',
        'time',
        'total',




    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'email_registered',
        'billing_period_start',
        'billing_period_end',
        'due_date',
        'invoice',
        'status',
    ];
}
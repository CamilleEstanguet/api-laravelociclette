<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boiler extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'serialNumber'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customId');
    }
}

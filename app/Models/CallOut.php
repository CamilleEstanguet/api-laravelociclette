<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallOut extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'duration',
        'date'

    ];

    public function boiler()
    {
        return $this->belongsTo(Boiler::class, 'boilerId');
    }
    public function technician()
    {
        return $this->belongsTo(Technician::class, 'techId');
    }
}

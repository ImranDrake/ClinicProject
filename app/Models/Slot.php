<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;

    protected $fillable = ['doctor_id', 'date'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function times()
    {
        return $this->hasMany(SlotTime::class);
    }

}

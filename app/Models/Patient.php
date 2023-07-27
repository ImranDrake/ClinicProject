<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'email', 'phone_number'];

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
        
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    
}

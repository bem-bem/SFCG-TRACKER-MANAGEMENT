<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'fever_chill', 'headache', 'cough', 'cold', 'sorethroat', 'rashess', 'fatigue', 'weakness', 'lost_of_smell_taste', 'diarhea', 'defficult_breathing', 'none', 'other_symptoms', 'created_at', 'purpose', 'temperature',
    ];
    
    public $timestamps = false;
    
    public function person()
    {
        return $this->belongsTo(Person::class);
    }

}
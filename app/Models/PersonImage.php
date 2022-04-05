<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonImage extends Model
{
    use HasFactory;

    protected $fillable = ['path','person_id'];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}

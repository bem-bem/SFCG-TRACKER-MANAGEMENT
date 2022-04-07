<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = ['category','last_name','first_name','middle_name','contact_number','brgy','municipality','province','position','department','grade_level','section','id_number','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function personImage()
    {
        return $this->hasOne(PersonImage::class);
    }

    public function vaccineImage()
    {
        return $this->hasOne(VaccineImage::class);
    }

    public function survey()
    {
        return $this->hasMany(Survey::class);
    }
}

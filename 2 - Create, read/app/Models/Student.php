<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => $attributes['last_name'] . ' ' . $attributes['first_name']
        );
    }

    protected function age(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => floor((time() - strtotime($attributes['date_of_birth'])) / 31556926)
        );
    }

    protected function genderString(): Attribute
    {
        return Attribute::make(
            get: function ($value, $attributes) {
                if ( $attributes['gender'] === 0 ) {
                    return "Nam";
                }
                return "Nữ";
            }
        );
    }



}

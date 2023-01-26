<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseholdMember extends Model
{
    use HasFactory;

    public static function booted()
    {
        static::creating(function($model){
            $model->status = 'submitted';
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

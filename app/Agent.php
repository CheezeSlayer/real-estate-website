<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    //
    protected $guarded = [];
    protected $casts = [
        'homes' => 'array',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function home() {
        return $this->hasMany(Home::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary extends Model
{
    use HasFactory;

    public function kid() {
        return $this->belongsTo('App\Models\Kid');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    protected $fillable = [
        'health',
        'kid_id',
        'food',
        'contact',
        'user_id'
    ];




}



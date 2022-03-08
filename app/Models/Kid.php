<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function diaries() {
        return $this->hasMany('App\Models\diary');
    }



    
    protected $fillable = [
        'name',
        'user_id',
        'age',
        'gender',
        'parent_name',
    ];



}

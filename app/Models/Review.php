<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    protected $fillable = [
        'user_id',
        'store_id',
        'rating',
        'comment'
    ];

    public function setNameAttribute($comment)
    {
        $this->attributes['comment'] = trim($comment);
    }
    
    use HasFactory,SoftDeletes;

    public function store() {
        return $this->belongsTo(Store::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}

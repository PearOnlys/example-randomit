<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'category_id',
        'delivery_id'
    ];
    
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = ucfirst(trim($name));
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function delivery() {
        return $this->belongsTo(Delivery::class);
    }
    
    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function favouriteUsers()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

}

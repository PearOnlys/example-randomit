<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Delivery extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
    ];

    static $rules = [
        'name' => 'required|max:255|unique:deliveries,name'
    ];
    
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = ucfirst(trim($name));
    }

    public function stores() {
        return $this->hasMany(Store::class);
    }
}

<?php

namespace App\Models;

use Dotenv\Validator;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Validation\Validator as ValidationValidator;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
    ];

    static $rules = [
        'name' => 'required|max:255|unique:categories,name'
    ];
    
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = ucfirst(trim($name));
    }

    public function stores() {
        return $this->hasMany(Store::class);
    }
}

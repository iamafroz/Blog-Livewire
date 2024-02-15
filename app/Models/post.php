<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class post extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
        'image',
        'user_id',
        'category_id',
    ];

    protected $softDelete = true;
    
    public function scopeSearch(Builder $query, $value){
        if(!empty($value)){
            $query->where('title','like','%'.$value.'%');
        }else{
            $query;
        }
    }
}

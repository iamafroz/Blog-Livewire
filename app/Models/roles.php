<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    
    public function users()
    {
        return $this->hasOne(User::class,'role_id','id');
    }
    
    protected $fillable = [
        'name',
    ];
}

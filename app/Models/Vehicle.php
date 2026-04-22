<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // nie wiadomo czy potrzebne

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','brand','model','year_of_prod','engine_capacity','power','description'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

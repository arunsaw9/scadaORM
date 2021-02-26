<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserActivity;

class ScadaDrilling extends Model
{
    use HasFactory;
    protected $guarded = [];

     public function activities(){
    	return $this->hasMany('App\Models\UserActivity', 'drilling_id', 'id');
    }

    
}

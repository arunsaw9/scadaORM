<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ScadaDrilling;

class UserActivity extends Model
{
    use HasFactory;
     protected $dateFormat = 'U';

   public function drillings()
    {
        return $this->belongsTo(ScadaDrilling::class);
    }
}

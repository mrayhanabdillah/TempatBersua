<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resto extends Model
{
    use HasFactory;
    public function like()
    {
        return $this->hasOne(like::class);
    }
}

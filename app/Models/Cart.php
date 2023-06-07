<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function music()
    {
        return $this->belongsTo(Music::class);
    }
}

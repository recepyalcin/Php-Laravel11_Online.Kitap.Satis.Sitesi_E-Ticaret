<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepet extends Model
{
    use hasFactory;

    public function kitap()
    {
        return $this->belongsTo(Kitap::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

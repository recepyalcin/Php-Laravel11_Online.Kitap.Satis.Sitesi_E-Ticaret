<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siparisedilenler extends Model
{
    use HasFactory;

    public function kitap()
    {
        return $this->belongsTo(Kitap::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function siparis()
    {
        return $this->belongsTo(Siparis::class);
    }
}

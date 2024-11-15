<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitap extends Model
{
    use HasFactory;
    #One to Many (Inverse) / Belongs to
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}

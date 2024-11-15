<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $appends = [
        'parent'
    ];

    #One to Many
    public function kitap()
    {
        return $this->hasMany(Kitap::class);
    }

#One to Many Iverse -Tersi
    public function parent()
    {
        return $this->belongsTo(Kategori::class, 'parent_id');
    }
#One to Many
    public function children()
    {
        return $this->hasMany(Kategori::class, 'parent_id');
    }
    public function allChildren()
    {
        return $this->children()->with('allChildren');
    }

}

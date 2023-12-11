<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'breed',
        'colour',
        'age',
        'weight',
        'sex',
        'status',
        'kategoris_id'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategoris_id');
    }

    public function Adoption()
    {
        return $this->hasMany(Adoption::class);
    }
}

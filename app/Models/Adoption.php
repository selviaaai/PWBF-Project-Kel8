<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'hewan_id', 'pickup_date'];

    public function Hewan()
    {
        return $this->belongsTo(Hewan::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}

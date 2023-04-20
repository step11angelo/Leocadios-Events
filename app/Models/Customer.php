<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'planner', 'thumbnail'];

    public function galleries() {
return $this->hasMany(Gallery::class);
    }
}

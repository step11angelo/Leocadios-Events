<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['image_url', 'customer_id'];

    public function customer() 
    {
        return $this->belongsTo(Customer::class);
    }
}

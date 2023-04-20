<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
    protected $fillable = ['packageName', 'paxOption1', 'paxOption2', ' courses', 'styling1', 'styling2', 'styling3', 'styling4', 'styling5', 'freebies1', 'freebies2', 'freebies3' ];
}

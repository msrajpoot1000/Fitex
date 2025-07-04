<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serve extends Model
{
    use HasFactory;

    protected $table = 'serves';

    // Mass assignable field
    protected $fillable = [
        'name',
        'image',
    ];
}

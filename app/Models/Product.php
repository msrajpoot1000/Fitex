<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Productcategory;

class Product extends Model
{
    use HasFactory;

    // Table name automatic samajh jaata hai (products), isliye yaha define karna zaruri nahi

    protected $fillable = [
        'productcategory_id',
        'heading',
        'productimage',
        'botanicalname',
        'origin',
        'color',
        'quality', // JSON
        'purity',  // JSON
        'harvestseason',
        'shelflife',
        'packagingoption',
        'minimumorder',
        'containerstuffing', // JSON
        'producationcapacity',
        'description'
    ];
    
    // Automatically cast these fields to array when getting from DB
    protected $casts = [
        'quality' => 'array',
        'purity' => 'array',
        'containerstuffing' => 'array'
    ];

    // Relationship: Product belongs to Productcategory
    public function category()
    {
        return $this->belongsTo(Productcategory::class, 'productcategory_id');
    }
}

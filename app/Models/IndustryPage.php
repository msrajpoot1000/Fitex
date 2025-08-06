<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndustryPage extends Model
{
    protected $fillable = ['name', 'image', 'description', 'is_active', 'ref_id'];
    public function industry()
    {
        return $this->belongsTo(Industry::class, 'ref_id');
    }

    public function subCategories()
    {
        return $this->hasMany(IndustryPage::class, 'ref_id');
    }

}
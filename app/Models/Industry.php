<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model {
    protected $fillable = ['name', 'logo', 'is_active'];
    public function industryPages()
    {
        return $this->hasMany(IndustryPage::class);
    }

    //
}

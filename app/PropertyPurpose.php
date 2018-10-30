<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyPurpose extends Model
{
    protected $fillable =[
      'property_purpose'
    ];

    public function properties(){
      return $this->hasMany(Property::class);
    }

}

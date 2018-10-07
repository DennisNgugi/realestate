<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
  protected $fillable =[
    'property_type'
  ];

  public function properties(){
    return $this->hasMany(Property::class);
  }
}

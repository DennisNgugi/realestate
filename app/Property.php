<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable =[
'property_name',
'property_purpose_id',
'property_type_id',
'location_id',
'price',
'bedrooms',
'bathrooms',
'garage',
'description',
'featured_image',
'status',

    ];
    public function propertypurpose(){
      return $this->belongsTo(PropertyPurpose::class , 'property_purpose_id');
    }
    public function propertytype(){
      return $this->belongsTo(PropertyType::class, 'property_type_id');
    }
    public function location(){
      return $this->belongsTo(Location::class, 'location_id');
    }
    public function propertyimage(){
      return $this->hasMany(Images::class, 'property_id');
    }
    public function inquiry(){
      return $this->hasMany(Inquiry::class , 'property_id');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable =[
      'name','property_type','property_purpose','property_name','description','email','mobile','address','location'
    ];

    public function propertypurpose(){
      return $this->belongsTo(PropertyPurpose::class, 'property_purpose');

    }
    public function propertytype(){
      return $this->belongsTo(PropertyType::class, 'property_type');

    }
    public function enquiryimages(){
      return $this->hasMany(EnquiryFiles::class,'enquiry_id');
    }
}

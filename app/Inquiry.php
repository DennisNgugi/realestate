<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
      'firstname','property_id','lastname','email','mobile','message'
    ];
  public function property_inquiry(){
      return $this->belongsTo(Property::class,'property_id');
    }

}

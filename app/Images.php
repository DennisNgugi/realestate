<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    public function properties(){
      return $this->belongsTo(Property::class,'property_id');
    }
}

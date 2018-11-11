<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnquiryFiles extends Model
{
    //
    public function enquiry(){
      return $this->belongsTo(Enquiry::class,'enquiry_id');
    }
}

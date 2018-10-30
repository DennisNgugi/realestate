<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    public function categories(){
      return $this->belongsTo(DownloadCategory::class, 'category_id','id');
    }
}

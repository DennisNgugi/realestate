<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DownloadCategory extends Model
{
    protected $fillable = [
        'category'
    ];
    public function download(){
      return $this->hasMany(Download::class , 'category_id','id');
    }
}

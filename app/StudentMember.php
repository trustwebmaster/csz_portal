<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentMember extends Model
{
     protected $guarded = [];

     public function scopeCheapButBig($query){
          return $query->OrderBy('created_at' , 'desc')->whereChapter('Harare');
      }


      public function setChapterAttribute($value)
     {
         $this->attributes['chapter'] = strtoupper($value);


     }

      public function getNameAttribute()
     {
          return $this->attributes['firstname'].
          ' ' . $this->attributes['surname'];
     }

     public function user()
     {
          return $this->belongsTo('App\User');
     }

     public function order()
     {
          return $this->hasMany('App\Models\Order');
     }


}

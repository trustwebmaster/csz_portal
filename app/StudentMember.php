<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentMember extends Model
{
     protected $guarded = [];

     public function scopeCheapButBig($query){
          return $query->OrderBy('created_at' , 'desc')->whereChapter('Harare');
      }

      public function getEmailAttribute($email)
      {
      return 'Chibaba ' . $email;
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
}

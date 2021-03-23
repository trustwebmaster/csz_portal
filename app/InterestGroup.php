<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterestGroup extends Model
{
    protected  $guarded = [];

    public function interest_groups(){
        return $this->belongsTo(User::class);
    }
}

<?php

namespace biometrico;

use Illuminate\Database\Eloquent\Model;

class Checkinout extends Model
{
    protected $table = "checkinout";

    protected $primaryKey  = "userid";

    public function user()
    {

    	return $this->belongsTo(Userinfo::class, 'userid');

    }

}

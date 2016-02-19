<?php

namespace biometrico;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    protected $table = "userinfo";

    protected $primaryKey = "userid";

    public function checks()
    {

    	return $this->hasMany(Checkinout::class, 'userid');

    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    public function agencyType()
    {
        return $this->hasOne('App\AgencyType', 'key', 'type_key');
    }
}

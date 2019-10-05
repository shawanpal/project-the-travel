<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model {

    protected $table = 'packages';

    public function country() {
        return $this->belongsTo('App\Country');
    }

    public function package_sale() {
        return $this->belongsTo('App\Package_sale');
    }

}

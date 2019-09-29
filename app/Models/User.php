<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

}

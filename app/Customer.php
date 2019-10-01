<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail(int $id)
 */
class Customer extends Model
{
    protected $table = 'customer';
}

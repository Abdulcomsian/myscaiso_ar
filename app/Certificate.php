<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $connection = 'second_db';
    protected $table = 'wp_users';
}

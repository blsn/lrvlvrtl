<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts'; // table name
    public $primaryKey = 'id'; // primary key
    public $timestamps = true; // timestamps
}

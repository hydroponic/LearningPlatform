<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Messages extends Model
{

    protected $fillable = [
        'subject', 'text', 'email', 'name'
    ];
    public $timestamps = false;

}

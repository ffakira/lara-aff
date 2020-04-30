<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model {
    /**
     * The attribute that are mass assignable.
     * @var string[]
     */
    protected $fillable = ['name', 'phone', 'message'];
}

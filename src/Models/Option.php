<?php

namespace Alright\Options\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Option extends Model
{
    use SoftDeletes;
    public $timestamps = false;
    protected $fillable = [
        'option_name',
        'option_value',
        'opt_val_type',
        'autoload'
    ];
}

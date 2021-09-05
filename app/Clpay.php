<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clpay extends Model
{
    protected $table = 'clpay';

    protected $column = [
        'makh',
        'sotkkh',
        'loaitkkh'
    ];

    protected $primaryKey = 'makh';

    public $timestamps = false;
}

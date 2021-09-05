<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Clinfo extends Model
{
    protected $table = 'clinfo';

    protected $column = [
        'makh',
        'hotenkh',
        'ngaysinhkh',
        'socmkh',
        'sdtkh',
        'emailkk'
    ];

    protected $fillable = ['hotenkh', 'ngaysinhkh', 'socmkh', 'sdtkh', 'emailkh'];

    protected $primaryKey = 'makh';

    public $timestamps = false;
}

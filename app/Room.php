<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';

    protected $column = [
        'maphong',
        'tenphong',
        'sophong',
        'tinhtrang',
        'loai',
        'gia'
    ];

    protected $fillable = ['tenphong', 'sophong', 'tinhtrang', 'loai', 'gia'];

    protected $primaryKey = 'maphong';

    public $timestamps = false;

}

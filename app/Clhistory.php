<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clhistory extends Model
{
    protected $table = 'clhistory';

    protected $column = [
        'makh',
        'maphong',
        'ngaygd',
        'tenphong',
        'tgssudung',
        'ngaybd',
        'tongtien',
        'htthanhtoan'
    ];

    protected $fillable = ['ngaybd', 'tenphong', 'tgsudung', 'ngaybd', 'htthanhtoan'];

    protected $primaryKey = 'makh';

    public $timestamps = false;
}

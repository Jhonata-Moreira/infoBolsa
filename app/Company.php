<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $table = 'companies';

    protected $fillable = [
        'name', 'symbol', 'value', 'change_percent', 'updated_at'
    ];

    protected $casts = [
        'change_percent' => 'float'
    ];
}

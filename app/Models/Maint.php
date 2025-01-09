<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maint extends Model
{
    protected $fillable = [
        'date',
        'type',
        'cost',
    ];
}

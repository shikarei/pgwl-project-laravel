<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PolylinesModel extends Model
{
    protected $table = 'polylines';
    protected $guided = 'id';

    protected $fillable = [
        'geom',
        'name',
        'description',
    ];
}

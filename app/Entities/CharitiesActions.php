<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class CharitiesActions extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'title', 'begin_datetime', 'local', 'address', 'description', 'participants_quantity'
    ];

}

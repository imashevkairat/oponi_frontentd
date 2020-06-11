<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoryes extends Model
{
    protected $fillable =
        [
          'name','lastname','price','qty'
        ];
}

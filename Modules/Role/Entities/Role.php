<?php

namespace Modules\Role\Entities;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name','permissions'];
}

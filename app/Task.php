<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function getRouteKeyName()
    {
        return 'id';
    }
    public function scopeIncomplete($query)
    {
        return $query->where('completed',0);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    public function scopeIncomplete($query) {
    	return $query->where('done', 0);
    }
}

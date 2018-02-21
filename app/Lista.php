<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
	protected $fillable = ['name'];

    public function todos() {
        return $this->hasMany(Todo::class);
    }

    public function sum() {
    	return $this->todos()->count();
    }
}

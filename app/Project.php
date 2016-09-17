<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function submissions() {
    	return $this.hasMany(Submission::class);
    }
}

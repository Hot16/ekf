<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Face extends Model
{
    protected $fillable = ['soname', 'name', 'fathers_name', 'birth_date', 'gender', 'full_name'];

    public function Kid(){
        return $this->hasMany('App\Kid');
    }
}

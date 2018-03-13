<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    protected $fillable = ['face_id', 'soname', 'name', 'fathers_name', 'birth_date', 'gender', 'full_name'];

    public function Face(){
        return $this->belongsTo('App\Face');
    }
}

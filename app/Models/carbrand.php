<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carbrand extends Model
{
  	protected $table = 'carbrand';

    protected $fillable = ['user_id','carbrand_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

       public function carmodel()
    {
        return $this->hasMany(carmodel::class, 'carbrand_id');
    }
}

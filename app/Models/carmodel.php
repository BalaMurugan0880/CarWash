<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carmodel extends Model
{
   protected $table = 'carmodel';
   protected $fillable = ['user_id', 'carbrand_id', 'carmodel_name','price'];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function carbrand()
    {
        return $this->belongsTo(carbrand::class, 'id');
    }
}

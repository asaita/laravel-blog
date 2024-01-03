<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    //modeldeki bu fonksiyonu override yapmış olduk ders 124
    public function getRouteKeyName()
    {
     
        return 'slug';
        
    }
}

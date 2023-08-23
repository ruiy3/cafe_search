<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    //「1対多」の関係なので単数系に
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //「1対多」の関係なので単数系に
    public function cafe()
    {
        return $this->belongsTo(Cafe::class);
    }
    
    //「1対多」の関係なので単数系に
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    //「1対多」の関係なので複数系に
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    
}

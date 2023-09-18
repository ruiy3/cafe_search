<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'comment',
        'user_id',
        'review_id',
    ];
    
     //「1対多」の関係なので単数系に
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
     //「1対多」の関係なので単数系に
    public function review()
    {
        return $this->belongsTo(Review::class);
    }
}

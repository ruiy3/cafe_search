<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    use HasFactory;
    
    
    public function getPaginateByLimit(int $limit_count = 4)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    //「1対多」の関係なので単数系に
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}



<?php

namespace App\Models;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coment extends Model
{
    use HasFactory;

    
    
 public function Post(){
    return $this->belongsTo(Posts::class);
 }
}

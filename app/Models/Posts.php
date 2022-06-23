<?php

namespace App\Models;



use App\Models\Tag;
use App\Models\Image;
use App\Models\Coment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Posts extends Model
{
    use HasFactory;
    protected $fillable = ['title','content'];

    
 public function coments(){
    return $this->hasMany(Coment::class);
 }
 public function image(){
    return $this->hasOne(Image::class);
 }

}

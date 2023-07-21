<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    //Relación uno a muchos inversa

    public function user() //user_id
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //Relación muchos a muchos

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //Relación uno a uno polimorfica

    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
}

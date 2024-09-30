<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;
    protected $fillable = ['post_id','comment','name','phone_number'];

    public function post(){
        return $this->belongsto(Post::class);
    }
   
}

<?php

namespace App\Models;

use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','content'];

    public function linkedpost(){
        return $this->belongstoMany(Linked_post::class);
    }
    public function images(){
        return $this->haveMany(Images::class);
    }
    public function location(){
        return $this->belongsToMany(Location::class);
    }
    public function comment(){
        return $this->haveMany(Comment::class);
    }
}

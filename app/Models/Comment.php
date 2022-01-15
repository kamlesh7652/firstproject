<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable=['name','comment','blog_id'];
    public function Blog()
    {
        return $this->belongsTo(Blog::class);
    }
}

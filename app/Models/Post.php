<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['title','description','name', 'post_status', 'usertype'];
    protected $table="posts";
    protected $primaryKey="id";
}

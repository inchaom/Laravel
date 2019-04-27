<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\tag;

class PostModel extends Model
{
    
    protected $table = "posts";
    protected $primaryKey = "id";
    protected $fillable = [
        'title',
        'description',
    ];

    public function tags(){
        return $this->belongsToMany(tag::class);
    }
}

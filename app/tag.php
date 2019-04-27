<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PostModel;

class tag extends Model
{
    protected $fillable = [
        'name',
    ];

    public function posts(){
        return $this->belongsToMany(PostModel::class);
    }
}

<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class category extends Model
{
    use HasFactory;


    protected $fillable = ['name'];

    public function articles(){
        return $this->hasMany(Article::class);
    }
}

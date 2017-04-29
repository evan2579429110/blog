<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ArticleModel extends CommonModel
{
    //
    protected $table = 'article';
    protected $fillable = ['content','type','title','user_id'];
}

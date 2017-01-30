<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
    protected $table = 'talks';

    protected $fillable = ['id', 'url', 'title', 'photo', 'body', 'video'];

    public function shorten($num = 100){

        $string = strip_tags($this->body);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;
    }  
}

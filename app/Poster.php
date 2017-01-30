<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    protected $table = 'posters';

    protected $fillable = ['id', 'url', 'title', 'photo', 'body'];

    public function shorten($num = 100){

        $string = strip_tags($this->body);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;
    }  
}

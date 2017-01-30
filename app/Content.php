<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';

    protected $fillable = ['id', 'url', 'title', 'photo', 'body'];

    public function shorten($num = 100){

        $string = strip_tags($this->body);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;
    }  
}

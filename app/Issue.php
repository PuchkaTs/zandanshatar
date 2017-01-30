<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $table = 'issues';

    protected $fillable = ['id', 'url', 'title', 'photo', 'body', 'ontslog'];

    public function shorten($num = 100){

        $string = strip_tags($this->body);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;
    }  
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'histories';

    protected $fillable = ['id', 'position', 'title', 'body'];

    public function shorten($num = 100){

        $string = strip_tags($this->body);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;
    } 

    public function getListForTimeline(){

        $histories = Self::orderBy('position', 'asc')->get();

        return $histories;

    }    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = array('id');
    
    public function updateNewerThan(){
        return $this->orderBy('updated_at','desc');
    }
    
    public function limit(int $n){
        return $this->limit($n);
    }
}

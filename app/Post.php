<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function updateNewerThan(){
        return $this->orderBy('updated_at','desc');
    }
    
    public function limit(int $n){
        return $this->limit($n);
    }
}

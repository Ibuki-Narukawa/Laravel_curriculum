<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $guarded = array('id');
    
    public function updateNewerThan(){
        return $this->orderBy('updated_at','desc');
    }
    
    public function limit(int $n){
        return $this->limit($n);
    }
}

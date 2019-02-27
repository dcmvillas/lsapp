<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    //Table name
    #protected $table ='post';

    //primary key
    public $primaryKey ='id';

    //timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

}

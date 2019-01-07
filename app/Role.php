<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $primaryKey = 'id_roles';

    //
    /**
    * Get the comments for the blog post.
    */
   public function users()
   {
       return $this->hasMany('App\User','id_roles','id_roles');
   }
}

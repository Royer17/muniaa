<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use SoftDeletes;
    
    protected $table = 'roles';

    protected $primaryKey = 'id';
    
    protected $fillable = ['name', 'description'];

    public function users() {
        return $this->hasMany('App\User', 'role_id');
    }
}

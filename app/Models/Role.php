<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table='roles';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function actors(){
        return $this->belongsToMany(Actor::class,'actor_role','role_id','actor_id');
    }
}

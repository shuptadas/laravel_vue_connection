<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    protected $table="actors";
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function roles(){
        return $this->belongsToMany(Role::class, 'actor_role', 'actor_id','role_id');
    }
}

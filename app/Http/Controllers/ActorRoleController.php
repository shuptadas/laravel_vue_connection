<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Role;
use Illuminate\Http\Request;

class ActorRoleController extends Controller
{
    public function view(){
        // $actor = Actor::with('roles')->find(3) ;
        // $role = $actor->roles;
        // dump($role);

        // $role = Role::with("actors")->find(3);
        // $actor = $role->actors;
        // dump($actor);

        // $role = Actor::with('roles')->get();
        // // $actor = $role->actors;
        // dump($role->toArray());

        $actor = Role::with('actors')->get();
        dump($actor->toArray());

    }
}

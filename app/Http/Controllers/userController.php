<!-- <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function showUsersdb(){
        $users = DB::table("users")->get();
        // return $users;
        // foreach( $users as $user ){
            // echo "".$user->id." ".$user->name." ".$user->email." <br>";
            return view('allusers',['data'=> $users]);
        // }
    }
    public function singleUser(string $id){
        $user = DB::table('users')->where('id', $id)->get();
        // return $user;
        return view('singleUserShow',['data'=> $user]);
    }
    public function addUser(){
        $user = DB::table('users')
                 ->insertOrIgnore([
                    'name'=> 'jhinuk1',
                    'email'=> 'jhinuk1@gmail.com',
                    'age' => '25'

                    ]);
        if($user){
            echo '<h1>Data sucessfully added</h1>';
        }
        else{
            echo '<h1>Data not added</h1>';
          }
    }

    public function updateUser(){
        $user = DB::table('users')
        ->where('id', 10)
        ->update([
            'name'=> 'misti']);
    }

    public function deleteUser(string $id){
        $user = DB::table('users')
        ->where('id', $id)
        ->delete();

        if($user){
            return redirect()->route('home');
        }

    }

}















// $user = DB::table('users')
//                  ->insert([
//                 [
//                     'name'=> 'jhinuk',
//                     'email'=> 'jhinuk@gmail.com',
//                     'age' => '25'
//                  ],
//                  [
//                     'name'=> 'Faias',
//                     'email'=> 'Faias@gmail.com',
//                     'age' => '26'
//                  ]
//                     ]); -->
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class RoleController extends Controller
{
//     //to show the roles of user
//     public function user_roles(){
//         $roles=User::find(5)->roles;
//         foreach($roles as $role){
//           echo $role->role_name ."<br>";
//         } 
    //  }
        public function user_roles (string $id){
          $roles=User::find($id)->roles;
          foreach($roles as $role){
            echo $role->role_name ."<br>";
          }
       
       
        
        }
     //to show the users of role
     public function role_users(){
        $users=Role::find(5)->users;
        foreach($users as $user){
          echo $user->name ."<br>";
        }
       
        
    }
}

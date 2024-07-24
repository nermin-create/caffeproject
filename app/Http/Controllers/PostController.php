<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;

class PostController extends Controller
{
    //
    public function user_posts(){
        $posts=User::find(5)->posts;
        foreach($posts as $post){
            echo "the posts of the user is: $post->Title";
            echo"<br>";
        }
    }
        public function user_data(){
            $users=post::find(1)->user;
            echo"The name  and email of user is:$users->name <br> $users->email";

        }
        public function index(){
            $posts=post::get();
            return view ('posts.all',compact('posts'));
        }
    

        public function show(string $id){
            $posts=post::findOrFail($id);
            return  view ('posts.showpost',compact ('posts'));
        }
        
        public function user_post(string $id){
        $user_posts=User::find($id)->posts;
        return  view ('posts.user_posts',compact ('user_posts'));
    }
    
}

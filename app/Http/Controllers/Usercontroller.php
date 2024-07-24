<?php

namespace App\Http\Controllers;
use App\Models\users;
use App\Models\User;
use Illuminate\Http\RedirectResponse;



use Illuminate\Http\Request;

class Usercontroller extends Controller
{ //
    public function all_data(){
        $users=users::get();
        return view ('admin.users',compact('users'));
    }

 
    public function create(){
        return view('admin/addUser');
     }


     //store data
     public function store(Request $request):RedirectResponse{

        $messages=[
            'name.required'=>'name is required',
            'name.string'=>' name Should be string',
            'email.required'=> 'email is required',
            'email.unique'=> 'email must be unique'
            ];
             $request->validate([
            'name'=>'required|string',
            'email'=> 'required|unique:customers|max:255'
            
            ], $messages);
            
        $new_user =new users();
        $new_user->name=$request->name;
        $new_user->email=$request->email;
        $new_user->password=$request->password;
        $new_user->save();
        return redirect ('/admin/users');
    }
   
    

    public function edit(string  $id){
        $users=users::FindOrFail($id);
            return view ('admin.edituser',compact('users'));  
    }
    public function update(Request $request, string $id):RedirectResponse{
        users::where('id' ,$id)->update([
           'name' =>$request->name,
           'email' =>$request->email,
           'password' =>$request->password
        ]);
        return redirect ('/admin/users');

    }







    //to show user
    public function show(string $id){
        $users=User::findOrFail($id);
        return  view ('users.showuser',compact ('users'));
    
    }
    public function user_data(string $id){
        $users=User::findOrFail($id);
        return  view ('users.user_data',compact ('users'));
    
    }
    
    //to delete user
    public function destroy(Request $request):RedirectResponse
    {
        $id=$request->id;
       users::where ('id',$id)->delete();
        return redirect ('admin/users');
    }
     
    //to show deleted user
    public function showdeleted(){
        $users=users::onlyTrashed()->get();
        return view ('users.trasheduser',compact('users'));
     }
    //2=restore deleted data
 public function restore(Request $request):RedirectResponse{
    $id=$request->id;
    users::where('id' ,$id)->restore();
   
    
    return redirect ('/user/alluser');

    
}
//relation one to one between users and phones table
public function user_phone(){
   $phone= User::find(5)->phone;                     // to show the phone number
    return"the phone number is: $phone->phone_no ";
}
  
   
   
}

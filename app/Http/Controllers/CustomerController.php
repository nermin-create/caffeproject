<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Http\RedirectResponse;

class CustomerController extends Controller
{
    //
    public function index(){
        $data='nermeen';
        return"Welcome $data";

    }

    // public function show(){
    //     return view('form');
    // }
    //to insert in table static
    // public function create(){
    //     $new_cust =new Customer();
    //     $new_cust->name="lara";
    //     $new_cust->email="kgkhjd";
    //     $new_cust->save();
    //     return "data added succ";
    // }



    //to select alldata in table
    // public function all_data(){
    //     $customers=customer::get();
    //     foreach($customers as $row){
    //         echo $row->name ." ur email is  ". $row->email ."<br>" ;

    //     }
    // }
     //to insert data dynamic(by form)

     public function create(){
        return view('customers/insert');
     }
     // TO MAKE VALIDATION AND STORE FOR DATA
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
            
        $new_cust =new Customer();
        $new_cust->name=$request->name;
        $new_cust->email=$request->email;
        $new_cust->save();
        return redirect ('/customer/alldata');
    }
    
    //to selest all data in table by view(ex:customers view)
    public function all_data(){
        $customers=customer::get();
        return view ('customers.all_data',compact('customers'));
    }

    //to make update
    public function edit(string  $id){
        $customer=customer::FindOrFail($id);
            return view ('customers.edit',compact('customer'));

        
    }
    public function update(Request $request, string $id):RedirectResponse{
        customer::where('id' ,$id)->update([
           'name' =>$request->name,
           'email' =>$request->email
        ]);
        return redirect ('/customer/alldata');

    }


    public function destroy(Request $request):RedirectResponse{
        $id=$request->id;
        customer::where('id' ,$id)->delete();//softdelete
        //customer::where('id' ,$id)->forceDelete(); //forcedalete
        
        return redirect ('/customer/alldata');

        
    }
//TO SHOW CUSTOMER
public function show(string $id){
    $customer=customer::findOrFail($id);
    return  view ('customers.showcust',compact ('customer'));
}
// TO RESTORE DELETED DATA
//1-show deleted data
 public function showdeleted(){
    $customer=customer::onlyTrashed()->get();
    return view ('customers.trashedcusts',compact('customer'));
 }
 //2=restore deleted data
 public function restore(Request $request):RedirectResponse{
    $id=$request->id;
    customer::where('id' ,$id)->restore();
   
    
    return redirect ('/customer/alldata');

    
}
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use DataTables;

class PersonController extends Controller
{
    //createAccount
    public function createAccount(Request $req){
        
        Person::create([
            'username' => $req->userName,
            'fullname' => $req->fullName,
            'email' => $req->email,
            'password' => $req->password,
        ]);

    }

    // login validation
    public function loginValidate(Request $req){
        
        $result = Person::where("email",$req->email)->where("password",$req->password)->first();

        if($result){
            session()->put('userLogin',$result);
        }

        return $result;

    }

    // logout
    public function logoutBtn(){

        session()->pull('userLogin');

        return view('login');
    }

    // fetch all data
    public function getAllData(){

        $data = Person::all();
        return DataTables::of($data)
        ->addColumn("action",function($row){
            return '
                <div class="d-flex align-items-center justify-content-center">
                    <button id="editDataModal" data-id="'.$row->id.'" data-username="'.$row->username.'" data-fullname="'.$row->fullname.'" data-email="'.$row->email.'" data-password="'.$row->password.'" class="btn btn-primary shadow btn-xs sharp"><i class="fas fa-pencil-alt"></i></button>
                    <button onClick="deleteFunction('.$row->id.')" class="btn btn-danger shadow btn-xs sharp mx-2"><i class="fa fa-trash"></i></button>
                    <a href="/view/'.$row->id.'" class="btn btn-success shadow btn-xs sharp"><i class="fa fa-eye"></i></a>
                </div>';
        })
        ->make(true);

    }

    // delete 
    public function delete(Request $req){
        
        Person::find($req->id)->delete();

    }

    // view
    public function viewUser(Request $req){

         $data = Person::find($req->id);

         return view("view",compact('data'));

    }
    
    // update user
    public function updateUser(Request $req){
        
        Person::find($req->idEdit)->update([
            "username" => $req->emailEdit,
            "fullname" => $req->fullNameEdit,
            "email" => $req->emailEdit,
            "password" => $req->passwordEdit,
        ]);
        
    }
}

<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller 
{
    public function getLogin(){
        return view('login');
    }
    

    public function postLogin(Request $request){

        $arr = ['username'=>$request->username, 'password' =>$request->password];
         if(Auth::attempt($arr)){
        
            return redirect()->route('listUser')->with('message', 'Thành công');
        
        }else{
        
        return redirect()->route('getLogin')->with('message', 'That bail');
        }}  

    public function getLogout(){
        Auth::logout();
        return redirect()->intended('login');
    }

    public function getRegister(){
    return view('register');
    }

    public function postRegister (Request $request)

    {
        $user = new Users   ;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back() ->with('thanh cong','Tạo thành công ');
    }

    public function destroy($id)
    {
        
        $user = Users::find($id);
        $user->delete();
        return redirect()->route('listUser')
            ->with('success', 'Category deleted successfully');
    }

    public function edit($id)
    {
        $users = Users::paginate(10);
    return view('users.index', ['users' => $users]);
    }
}

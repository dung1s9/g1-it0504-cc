<?php



namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller

{
    public function getAllUser() {
        $users = User::paginate(10); // Sửa lại tên class User ở đây
        return view('listUser', compact('users'));
    }

    public function postLogin(Request $request){
        $arr = ['username' => $request->username, 'password' => $request->password];
        if(Auth::attempt($arr)){
            return redirect()->route('listUser')->with('message', 'Thành công');
        } else{
            return redirect()->route('getLogin')->with('message', 'That bai');
        }
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('listUser')
            ->with('success', 'Category deleted successfully');
    }

    public function edit($id)
    {
        $users = User::paginate(10);
        return view('users.edit', ['users' => $users]);
    }
}

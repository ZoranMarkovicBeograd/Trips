<?php
/**
 * Created by PhpStorm.
 * User: kiza
 * Date: 2/22/2019
 * Time: 10:29 AM
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller
{
    public function index()
    {
        if(!Gate::allows('admin', Auth::user())){
            return Redirect::to('/trips');
        }
        $users = DB::table('users')->get();
        return view('users', ['users' =>$users] );
    }

    public function edit(Request$request)
    {
        if(!Gate::allows('admin', Auth::user())){
            return Redirect::to('/trips');
        }
        $userId = $request->get('id');
        $user = User::where('id',$userId)->first();

        return view('users-edit',['user'=>$user]);
    }

    public function update(Request $request)
    {
        if(!Gate::allows('admin', Auth::user())){
            return Redirect::to('/trips');
        }
        $user = User::find($request->input('id'));
        $user->name = $request->input('name');
        //echo"<pre>";   var_dump($user);die;
        $user->username = $request->input('username');
        $user->save();

        return Redirect::to('/users');
    }

    public function delete(Request $request)
    {
        if(!Gate::allows('admin', Auth::user())){
            return Redirect::to('/trips');
        }
        $user = User::find($request->input('id'));
        $user->delete();

        return Redirect::to('/users');
    }

}
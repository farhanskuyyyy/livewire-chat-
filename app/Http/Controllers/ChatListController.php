<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ChatListController extends Controller
{
    public function index(Request $request)
    {
        $user_id = auth()->user()->id;
        $users = User::where('id','!=',$user_id)->get();
        return view('dashboard',compact('users'));
    }
}

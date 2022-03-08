<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{public function index() {
    $users = User::all();
    return view('profile.index', compact('users'));
}
    //

    public function delete(User $user) {
        Storage::delete('public/'.$user->id);
        $user->delete();
        return back()->with('message', 'ユーザーを削除しました');

    }
   
}

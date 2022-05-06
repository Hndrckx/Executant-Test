<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    public function delete($id)
    {
        $avatar = Avatar::find($id);
        $avatar->delete();
        return redirect('/avatars');
    }

    public function create()
    {
        return view('/create');
    }

    public function store(Request $request)
    {
        $allAvatars = Avatar::all()->count();
        if ($allAvatars < 5) {
            $store = new Avatar();
            $store->avatar = $request->file('avatar')->hashName();
            Storage::put('public', $request->file('avatar'));
            $store->name = $request->name;
            $store->save();
            return redirect('/avatars');
        } else {
            return redirect('/avatars')->with('');
        }
    }
}

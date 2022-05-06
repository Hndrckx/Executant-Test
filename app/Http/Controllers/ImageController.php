<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $store = new Image();
        $store->src = $request->file('src')->hashName();
        Storage::put('public', $request->file('src'));
        $store->name = $request->name;
        $store->categorie_id = $request->categorie_id;
        $store->save();
        return redirect('/images');
    }
}

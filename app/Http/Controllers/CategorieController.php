<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    // CREATE CATEGORIE
    public function create () {
        return view('layouts.createCat');
    }

    // STORE CATEGORIE
    public function store (Request $request) {
        $store = new Categorie();
        $store->categorie = $request->categorie;
        $store->save();
        return redirect('/categories');
    }

    // EDIT CATEGORIE
    public function edit ($id) {
        $edit = Categorie::find($id);
        return view('layouts.editCat', compact('edit'));
    }

    // UPDATE CATEGORIE
    public function update ($id, Request $request) {
        $update = Categorie::find($id);
        $update->categorie = $request->categorie;
        $update->save();
        return redirect('/categories');
    }
}

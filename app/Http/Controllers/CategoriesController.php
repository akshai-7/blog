<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categories()
    {
        return view('/categories');
    }
    public function cratecategories(Request $request)
    {
        $categories = new Categories();
        $categories->name = $request['categories'];
        $categories->save();
        return redirect('/categories');
    }

    public function categorieslist()
    {
        $categorieslist = Categories::get();
        return view('/categories', compact('categorieslist'));
    }
    public function updatecategorie($id)
    {
        $updatecategorie = Categories::where('id', $id)->get();
        return view('/updatecategorie', compact('updatecategorie'));
    }

    public function update(Request $request, $id)
    {
        $update = Categories::where('id', $request->id)->first();
        $update->name = $request['name'];
        $update->save();
        return redirect('/categories');
    }
    public function remove($id)
    {
        $categories = Categories::find($id);
        $categories->delete();
        return redirect('/categories');
    }
}

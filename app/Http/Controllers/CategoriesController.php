<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
        return view('/categories', ['categorieslist' => $categorieslist],);
    }
    public function remove($id)
    {
        $categories = Categories::find($id);
        $categories->delete();
        session()->flash('message1', 'Deleted');
        return redirect('/categories');
    }
}

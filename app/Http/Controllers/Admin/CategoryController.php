<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index() {
    
    $categories = Category::paginate(2);
    return view ('admin.categories.index', compact('categories'));

    }


    public function edit($id)
    {
      dd(__METHOD__);
    }


    public function update(Request $request, $id)
    {
    
    }

    public function destroy($id)
    {
        dd(__METHOD__);
    }
}

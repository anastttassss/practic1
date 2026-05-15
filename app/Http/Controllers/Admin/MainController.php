<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class MainController extends Controller
{

public function index()
{
   
    $existingTag = Tag::where('title', 'Привет мил!')->first();
    
    if (!$existingTag) {
        $tag = new Tag();
        $tag->title = 'Привет мил!';
        $tag->slug = 'privat-mir-2'; 
        $tag->save();
    }
    
    return view('admin.index');
}

}
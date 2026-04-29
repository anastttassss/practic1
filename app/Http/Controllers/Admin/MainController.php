<?php

namespace App\Http\Controllers\Admin;  
use App\Models\Tag;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        $tag = new Tag();
        $tag->title = 'Primer mipl';
        $tag->save();

        return view('admin.index');
    }
}
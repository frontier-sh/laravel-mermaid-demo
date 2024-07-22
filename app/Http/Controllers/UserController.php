<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show() {
        $collection = User::with('posts')->get();
        
        $mermaid = app('mermaid')->generateDiagramFromCollection($collection);

        return view('from-user-model', compact('mermaid'));
    }
}

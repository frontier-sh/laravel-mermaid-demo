<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicExampleController extends Controller
{
    public function show() {
        $data = [
            'A-->B',
            'A-->C',
            'B-->D',
            'C-->D',
        ];
        
        $mermaid = app('mermaid')->generateDiagramFromArray($data);

        return view('basic', compact('mermaid'));
    }
}

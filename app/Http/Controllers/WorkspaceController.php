<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function indexworkspace(){
        return view('workspacepage');
    }
}

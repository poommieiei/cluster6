<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkspaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexworkspace(){
        return view('workspacepage');
    }
    
    public function viewinsert(){
        return view('insertworkspace');
    }

    public function insertworkspace(Request $req){
        $req->validate(
            [
                'workspacename'=>'required | max:40'
            ]
        );
        $data=[
            'workspace_name'=>$req->workspacename
        ];
        // dd($data);
        DB::table('workspace')->insert($data);
        return view('/workspacepage');

    }
}

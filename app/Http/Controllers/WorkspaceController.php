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
        $workspaces = DB::table('workspace')->get();
        // dd($workspace);
        return view('workspacepage.workspace', compact('workspaces'));
    }

    public function viewinsert(){
        return view('workspacepage.insertworkspacepage');
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
        return redirect('/workspace');

    }

    public function deleteworkspace ($id){
        // dd($id);
        DB::table('workspace')->where('id', $id)->delete();
        return redirect('/workspace');
    }
}

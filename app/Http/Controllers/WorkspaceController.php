<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkspaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexworkspace()
    {
        $workspaces = Workspace::get();
        // dd($workspaces);
        return view('home', compact('workspaces'));
    }

    public function viewinsert()
    {
        return view('workspacepage.insertworkspace');
    }

    public function insertworkspace(Request $req, int $id)
    {

        $user = User::findOrFail($id);
        // dd($user);
        $req->validate(
            [
                'workspace' => 'required | max:40'
            ]
        );
        $workspace = $req->input('workspace');

        $Model = Workspace::create([
            'workspace_name' => $workspace,
            'owner' => auth()->user()->id
        ]);


        // DB::table('workspace')->insert($data);
        return redirect('/workspace');
    }

    public function deleteworkspace($id)
    {
        // dd($id);
        DB::table('workspace')->where('id', $id)->delete();
        // $workspace = Workspace::findOrFail($id);
        // if($workspace->id == $id){
        //     $workspace->delete();
        // }
        return redirect('/workspace');
    }
    public function renameworkspace(Request $req, $id)
    {
        // dd($req , $id);
        $req->validate([
            'workspaceName' => 'required|string|max:255'
        ]);
        $workspace = $req->input('workspaceName');
        $inputworkspace = Workspace::findOrFail($id);
        // dd($workspace );
        $inputworkspace->workspace_name = $workspace;
        $inputworkspace->save();


        return redirect('/workspace');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CollectionController extends Controller
{
    public function indexEmptyCollection(){
        return view('collection.emptyCollection');
    }

    public function indexcollection($id)
    {
        $collections = Collection::where('workspace_id' , $id)->get();
        // dd($collections);
        return view('collection.collection' , compact('id' , 'collections'));
    }

    public function renamecollection(Request $req , $id){
        // dd($req , $id);
        $req->validate([
            'collectionName' => 'required|string|max:40'
        ]);
        $collection = $req->input('collectionName');
        $inputcollection = Collection::findOrFail($id);
        $inputcollection->collection_name = $collection;
        $inputcollection->save();

        return redirect()->back();
    }

    public function deletecollection($id){
        DB::table('collection')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function importcollection(Request $request)
    {
        $id = DB::table('workspace')->max('id');
        if ($request->hasFile('json_file')) {
            $file = $request->file('json_file');

            if ($file->getClientOriginalExtension() === 'json') {
                try {
                    $workspace = Workspace::findOrFail($id)->first();


                    $data = json_decode(file_get_contents($file->path()), true);

                    if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                        return back()->with('error', 'Error decoding JSON file.');
                    }

                    $info = $data['info']['name']; // *
                    $collection = Collection::Create([
                        'collection_name' => $info,
                        'workspace_id' => $id,
                    ]);

                    $item = $data['item'];

                    if(array_key_exists('variable' , $data)){
                        $variable = $data['variable'];
                    }
                    // dd($info , $item );


                    // dd( count($data));

                    //ค้นหา ชื่อ รีเควสใน collection

                    // foreach($data['item'] as $index){
                    //     print_r([$index,'name']);
                    // }
                    // for( $index = 0 ; $index < count($data) ; $index++){
                    //     print_r($data['item'][$index]);
                    //     print_r('<br>');
                    // }

                    // if($data['variable'][0]){
                    //     print_r($data['variable'][0]);
                    // }

                    // return view('importview', ['jsonData' => $data]);


                } catch (Exception $e) {
                    return back()->with('error', 'Error processing JSON file.');
                }
            } else {
                return back()->with('error', 'The selected file is not a JSON file.');
            }
        } else {
            return back()->with('error', 'No file was uploaded.');
        }return redirect()->back();
    }


}

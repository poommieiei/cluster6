<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Workspace;
use App\Models\Request_Collection;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CollectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexEmptyCollection()
    {
        return view('collection.emptyCollection');
    }

    public function indexcollection($id)
    {
        $collections = Collection::where('workspace_id', $id)->get();
        // dd($id , $collections);
        return view('collection.collection', compact('id', 'collections'));
    }

    public function renamecollection(Request $req, $id)
    {
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

    public function deletecollection($id)
    {
        DB::table('collection')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function importcollection(Request $request, $id)
    {

        if ($request->hasFile('json_file')) {
            $file = $request->file('json_file');

            if ($file->getClientOriginalExtension() === 'json') {
                try {
                    // $workspace = Workspace::findOrFail($id)->get();

                    $data = json_decode(file_get_contents($file->path()), true);

                    if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                        return back()->with('error', 'Error decoding JSON file.');
                    }
                    dd($data);
                    $info = $data['info']['name'];
                    $request_collection = Request_Collection::class;
                    $collection = Collection::Create([
                        'collection_name' => $info,
                        'workspace_id' => $id,
                    ]);

                    for ($index = 0; $index < count($data['item']); $index++) {
                        $pathURL = $data['item'][$index];
                        if(is_array($data['item'][$index]['request']['url'])){
                            $request_collection::create([
                                'request_name' => $pathURL['name'],
                                'method_request' => $pathURL['request']['method'],
                                'method_url' => $pathURL['request']['url']['raw'],
                                'collection_id' => $collection->id
                            ]);

                        }
                        else{
                            $request_collection::create([
                                'request_name' => $pathURL['name'],
                                'method_request' => $pathURL['request']['method'],
                                'method_url' => $pathURL['request']['url'],
                                'collection_id' => $collection->id
                            ]);
                            // print_r($pathURL['name']);
                            // print_r($pathURL['request']['method']);
                            // print_r($pathURL['request']['url']);
                        }

                    }



                    $item = $data['item']['name'];

                    if (array_key_exists('variable', $data)) {
                        $variable = $data['variable'];
                    }
                } catch (Exception $e) {
                    return back()->with('error', 'Error processing JSON file.');
                }
            } else {
                return back()->with('error', 'The selected file is not a JSON file.');
            }
        } else {
            return back()->with('error', 'No file was uploaded.');
        }
        return redirect()->back();
    }
}

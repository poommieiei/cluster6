<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Error;
use Exception;
use Illuminate\Http\Request;
use PHPUnit\Event\Test\Errored;
use App\Models\Workspace;

class Importjson extends Controller
{
    public function importpage(){
        return view('importview');
    }

    public function importjson(Request $request ){
        dd($request->file('json_file'));
        $id = 43;
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
                        dd($info , $item , $variable);
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
        }
    }
}

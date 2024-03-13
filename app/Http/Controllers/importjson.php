<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class importjson extends Controller
{
    public function importpage(){
        return view('importview');
    }

    public function importjson(Request $request){
        if ($request->hasFile('json_file')) {
            $file = $request->file('json_file');

            if ($file->getClientOriginalExtension() === 'json') {
                try {
                    // Read and decode JSON
                    $data = json_decode(file_get_contents($file->path()), true);

                    // Check if decoding was successful
                    if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                        return back()->with('error', 'Error decoding JSON file.');
                    }
                    
                    // Pass data to the view
                    return view('importview', ['jsonData' => $data]);
                } catch (Exception $e) {
                    // Handle decoding errors gracefully
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

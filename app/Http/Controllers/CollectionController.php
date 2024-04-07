<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

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

    public function renamecollection(){
        return ;
    }

    public function deletecollection(){
        return ;
    }

    public function importcollection()
    {

        return ;
    }


}

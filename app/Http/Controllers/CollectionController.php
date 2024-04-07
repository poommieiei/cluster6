<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function indexEmptyCollection(){
        return view('collection.emptyCollection');
    }

    public function indexcollection($id)
    {
        return view('collection.collection' , compact('id'));
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

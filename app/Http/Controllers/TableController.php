<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Request_Collection;


use Illuminate\Http\Request;

class TableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function indexTable($id)
    {
        $request = Request_Collection::where('collection_id', $id)->get();
        $request2 = Request_Collection::where('collection_id', $id)->get();
        $collection = Collection::where('id', $id)->firstOrFail();

        return view("table.table", compact('id', 'request', 'request2', 'collection'));
    }

    public function indexTable2($id, $method)
    {
        $request = Request_Collection::where('collection_id', $id)->get();
        $request2 = Request_Collection::where('collection_id', $id)->where('method_request', $method)->get();

        $collection = Collection::where('id', $id)->firstOrFail();

        return view("table.table", compact('id', 'request', 'request2', 'collection'));
    }

    public function SaveTable()
    {
        return;
    }

    public function ExportTable()
    {
        return;
    }
}

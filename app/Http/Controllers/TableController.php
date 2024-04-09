<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use App\Models\Request_Collection;
use Exception;
use Illuminate\Support\Facades\DB;



class TableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexTable($id)
    {
        $request = Request_Collection::where('collection_id', $id)->get();
        $collection = Collection::where('id', $id)->firstOrFail();
        $reqIndex = $request[0];
        // dd($reqIndex);
        return view("table.table", compact('id', 'request', 'collection' , 'reqIndex'));
    }

    public function indexTable2($id, $requestId)
    {
        // dd($id , $requestId);
        $request = Request_Collection::where('collection_id', $id)->get();
        $request2 = Request_Collection::where('collection_id', $id)->where('method_request', $requestId)->get();

        $collection = Collection::where('id', $id)->firstOrFail();

        return view("table.table", compact('id', 'request', 'request2', 'collection'));
    }

    public function poom()
    {
        return view("table.poom");
    }
    public function SaveTable()
    {
        return;
    }

    public function ExportTable(Request $request)
    {
        return;
    }
}

<?php

namespace App\Http\Controllers;

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
        $tables = Request_Collection::where('collection_id', $id)->get();
        return view('table.table', compact('id', 'tables'));
    }

    public function poom()
    {
        return view("table.poom");
    }
    public function SaveTable()
    {
        return ;
    }

    public function ExportTable()
    {
        return ;
    }




}

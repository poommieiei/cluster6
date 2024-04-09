<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request_Collection;
use App\Models\Collection;


class TableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function indexTable()
    {
        return view("table.table");
    }

    public function SaveTable(Request $request,int $id)
    {
       //
    }

    public function ExportTable()
    {
        return ;
    }




}

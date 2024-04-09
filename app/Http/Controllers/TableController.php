<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

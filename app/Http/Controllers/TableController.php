<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use App\Models\Request_Collection;
use Exception;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;

use function PHPUnit\Framework\isNull;

class TableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexTable($id)
    {
        $request = Request_Collection::where('collection_id', $id)->get(); // สำหรับ side bar
        $request2 = Request_Collection::where('collection_id', $id)->get(); // สำหรับแสดง request
        $collection = Collection::where('id', $id)->firstOrFail();
        $reqIndex = $request[0];
        // dd($reqIndex->id);
        // dd($id, $request, $collection, $reqIndex);
        return view("table.table", compact('id', 'request', 'collection', 'reqIndex'));
    }

    public function indexTable2($id, $requestId)
    {
        // dd($id , $requestId);
        $request = Request_Collection::where('collection_id', $id)->get();
        $request2 = Request_Collection::where('collection_id', $id)->where('id', $requestId)->get();

        $reqIndex = Request_Collection::findOrFail($requestId);
        $collection = Collection::where('id', $id)->firstOrFail();
        // dd($id, $request, $collection, $reqIndex);
        return view("table.table", compact('id', 'request', 'collection', 'reqIndex'));
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
        // dd($request->input('no_body3'));
        $num = count($request->all());
        $requestArray = array_values($request->all());
        dd($request);
        // dd($request->no_body [2]);
        // echo $request->input('no_body1');


        for ($index = 0; $index < count($request->no_body); $index++) {
            echo $request->no_body[$index] . '<br>';
        }


        $phpWord = new PhpWord();
        $section = $phpWord->addSection();
        $section->addText('Method URL       ' . $request->input('required_param'));
        $section->addText('Route        ' . $request->input('Route'));
        $section->addTextBreak();

        // ตรวจสอบว่ามีการส่งค่าจากฟอร์มหรือไม่
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // ตรวจสอบว่า checkbox ถูกเลือกหรือไม่
            if (isset($_POST["cb_header"])) {
                $section->addText('HEADER');
                $Table = $section->addTable();
                $Table->addRow();
                $Table->addCell(700)->addText('NO');
                $Table->addCell(700)->addText('Key');
                $Table->addCell(1000)->addText('Required');
                $Table->addCell(1200)->addText('Example data');
                $Table->addCell(3000)->addText('Description');
                for ($index = 0; $index < count($request->no_header); $index++) {
                    $Table->addRow();
                    $Table->addCell(700)->addText($request->no_header[$index]);
                    $Table->addCell(1000)->addText($request->key_header[$index]);
                    $Table->addCell(1200)->addText($request->required_header[$index]);
                    $Table->addCell(1500)->addText($request->exampledata_header[$index]);
                    $Table->addCell(3000)->addText($request->description_header[$index]);
                }
                foreach ($Table->getRows() as $row) {
                    foreach ($row->getCells() as $cell) {
                        $cell->getStyle()->setBorderSize(6);
                    }
                }
                $section->addTextBreak();
            }
            if(isset($_POST["cb_body"])){
                $section->addText('BODY');
                $Table = $section->addTable();
                $Table->addRow();
                $Table->addCell(700)->addText('NO');
                $Table->addCell(700)->addText('Key');
                $Table->addCell(1000)->addText('Data Type');
                $Table->addCell(1200)->addText('Required');
                $Table->addCell(1500)->addText('Example data');
                $Table->addCell(3000)->addText('Description');

                for ($index = 0; $index < count($request->no_body); $index++) {
                    $Table->addRow();
                    $Table->addCell(700)->addText($request->no_body[$index]);
                    $Table->addCell(700)->addText($request->key_body[$index]);
                    $Table->addCell(1000)->addText($request->datatype_body[$index]);
                    $Table->addCell(1200)->addText($request->required_body[$index]);
                    $Table->addCell(1500)->addText($request->exampledata_body[$index]);
                    $Table->addCell(3000)->addText($request->description_body[$index]);
                }

                foreach ($Table->getRows() as $row) {
                    foreach ($row->getCells() as $cell) {
                        $cell->getStyle()->setBorderSize(6);
                    }
                }
            }
        }

        $filename = 'SPEC' . '.docx';
        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save($filename);
        return response()->download($filename)->deleteFileAfterSend(true);
    }
}

@extends('table.layouttable')
@section('content')
<div class="card-body" >
    {{-- Method UR --}}
    <table class="table table-bordered" id="method" style="margin-left: 20px; width:1150px">
        <thead>
            <br>
            <h6 style="font-size:15px; color:white; margin-left: 20px; width:1150px">Method URL</h6>
            <tr>
                <th style="width: 9%; font-size:14px; color:white; background-color: #032A37"><center>Method URL</th>
                <th style="font-size:14px; color:white; background-color: #032A37"><center>Route</th>
            </tr>
        </thead>
        <tbody id="my_tbody">
            <tr>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <center>
                    <select name="method" id="method" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
                        <option value="get">GET</option>
                        <option value="post">POST</option>
                        <option value="put">PUT</option>
                        <option value="patch">PATCH</option>
                        <option value="delete">DELETE</option>
                        <option value="head">HEAD</option>
                        <option value="options">OPTIONS</option>
                      </select>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">dadda</th>
            </tr>
        </tbody>
    </table>
    <div style="margin-left: 20px; width:1150px">
        &nbsp&nbsp&nbsp&nbsp
        <input type="checkbox" id="header" name="header">
        <label for="header" style="font-size:14px; color:white">Headers &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="checkbox" id="param" name="param">
        <label for="param" style="font-size:14px; color:white">Params &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="checkbox" id="body" name="body">
        <label for="body" style="font-size:14px; color:white">Body &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="checkbox" id="response" name="response">
        <label for="response" style="font-size:14px; color:white">Response</label><br>
    </div>

    {{-- Headers --}}
    <table class="table table-bordered" id="header" style="margin-left: 20px; width:1150px">
        <input type="checkbox" id="checkHeader" name="checkHeader">
        <thead>
            <br>
            <h6 style="font-size:15px; color:white; margin-left: 20px; width:1150px">Headers</h6>
            <tr>
                <th style="width: 5%; font-size:14px; color:white; background-color: #032A37"><center>No</th>
                <th style="width: 13%; font-size:14px; color:white; background-color: #032A37;"><center>Key</th>
                <th style="width: 13%; font-size:14px; color:white; background-color: #032A37"><center>Required</th>
                <th style="width: 13%; font-size:14px; color:white; background-color: #032A37"><center>Example data</th>
                <th style="font-size:14px; color:white; background-color: #032A37"><center>Description</th>
            </tr>
        </thead>
        <tbody id="my_tbody">
            <tr class="text-left">
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6"><center>1</th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">dawdawd</th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <center>
                    <select name="required_header" id="required_header" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
                        <option value="o">O</option>
                        <option value="m">M</option>
                        <option value="r">R</option>
                    </select>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">dawdawd</th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">dawdawd</th>
            </tr>
        </tbody>
    </table>

    {{-- Params --}}
    <table class="table table-bordered" id="param" style="margin-left: 20px; width:1150px">
        <input type="checkbox" id="checkParam" name="checkParam">
        <thead>
            <br>
            <h6 style="font-size:15px; color:white; margin-left: 20px; width:1150px">Params</h6>
            <tr>
                <th style="width: 5%; font-size:14px; color:white; background-color: #032A37"><center>No</th>
                <th style="width: 10%; font-size:14px; color:white; background-color: #032A37;"><center>Key</th>
                <th style="width: 10%; font-size:14px; color:white; background-color: #032A37;"><center>Param Type</th>
                <th style="width: 10%; font-size:14px; color:white; background-color: #032A37;"><center>Data Type</th>
                <th style="width: 10%; font-size:14px; color:white; background-color: #032A37"><center>Required</th>
                <th style="width: 10%; font-size:14px; color:white; background-color: #032A37"><center>Example data</th>
                <th style="font-size:14px; color:white; background-color: #032A37"><center>Description</th>
            </tr>
        </thead>
        <tbody id="my_tbody">
            <tr>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6"><center>1</th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">dawdawd</th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">dawdawd</th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">dawdawd</th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <center>
                    <select name="required_param" id="required_param" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
                        <option value="o">O</option>
                        <option value="m">M</option>
                        <option value="r">R</option>
                    </select>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">wdawdwda</th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">dawdawd</th>
            </tr>
        </tbody>
    </table>

    {{-- Body --}}
    <table class="table table-bordered" id="body" style="margin-left: 20px; width:1150px">
        <input type="checkbox" id="checkBody" name="checkBody">
        <thead>
            <br>
            <h6 style="font-size:15px; color:white; margin-left: 20px; width:1150px">Body</h6>
            <tr>
                <th style="width: 5%; font-size:14px; color:white; background-color: #032A37"><center>No</th>
                <th style="width: 10%; font-size:14px; color:white; background-color: #032A37;"><center>Key</th>
                <th style="width: 10%; font-size:14px; color:white; background-color: #032A37;"><center>Data Type</th>
                <th style="width: 10%; font-size:14px; color:white; background-color: #032A37"><center>Required</th>
                <th style="width: 10%; font-size:14px; color:white; background-color: #032A37"><center>Example data</th>
                <th style="font-size:14px; color:white; background-color: #032A37"><center>Description</th>
            </tr>
        </thead>
        <tbody id="my_tbody">
            <tr style="width: 20%">
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6"><center>1</th>
                    <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">dawdawd</th>
                    <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">dawdawd</th>
                    <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                        <center>
                        <select name="method" id="method" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
                            <option value="o">O</option>
                            <option value="m">M</option>
                            <option value="r">R</option>
                        </select>
                    </th>
                    <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">dawdawd</th>
                    <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">dawdawd</th>
                </tr>
            </tbody>
        </table>

    {{-- Response --}}
    <table class="table table-bordered" id="response" style="margin-left: 20px; width:100px">
        <thead>
            <br>
            <h6 style="font-size:15px; color:white; margin-left: 20px; width:1150px">Response</h6>
            <tr>
                <th style="width: 9%; font-size:14px; color:white; background-color: #032A37"><center>Status Code</th>
            </tr>
        </thead>
        <tbody id="my_tbody">
            <tr style="width: 20%">
                <th style="width: 9%; font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">201 &nbsp&nbsp&nbsp&nbsp&nbsp
                    <a href="#" class="text-decoration-none text-white me-3">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                </th>
            </tr>
        </tbody>
    </table>

</div>
<div>
    <button type="button" class="btn rounded-pill btn-success" style="position:absolute; bottom: 93.5%; right: 2%; width: 8%">
        <i class="fas fa-download"></i> Save
    </button>
    <button type="button" class="btn rounded-pill btn-info" style="position:absolute; bottom: 93.5%; right: 11%; width: 8%">
        <i class="fas fa-download"></i> Export
    </button>
</div>
@endsection

@extends('table.layouttable')
@section('content')
<div class="card-body">
    {{-- Method UR --}}
    <table class="table table-bordered">
        <thead>
            <br>
            <h6 style="font-size:15px; color:white">Method URL</h6>
            <tr>
                <th style="width: 9%; font-size:14px; color:white; background-color: #032A37"><center>Method URL</th>
                <th style="font-size:14px; color:white; background-color: #032A37"><center>Route</th>
            </tr>
        </thead>
        <tbody id="my_tbody">
            <tr style="width: 20%">
                <th style="width: 9%; font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <center>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">dawdawd</th>
            </tr>
        </tbody>
    </table>

    {{-- Headers --}}
    <table class="table table-bordered">
        <thead>
            <br>
            <h6 style="font-size:15px; color:white">Headers</h6>
            <tr>
                <th style="width: 9%; font-size:14px; color:white; background-color: #032A37"><center>Method URL</th>
                <th style="font-size:14px; color:white; background-color: #032A37"><center>Route</th>
            </tr>
        </thead>
        <tbody id="my_tbody">
            <tr style="width: 20%">
                <th style="width: 9%; font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <center>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">dawdawd</th>
            </tr>
        </tbody>
    </table>

        {{-- Params --}}
    <table class="table table-bordered">
        <thead>
            <br>
            <h6 style="font-size:15px; color:white">Params</h6>
            <tr>
                <th style="width: 9%; font-size:14px; color:white; background-color: #032A37"><center>Method URL</th>
                <th style="font-size:14px; color:white; background-color: #032A37"><center>Route</th>
            </tr>
        </thead>
        <tbody id="my_tbody">
            <tr style="width: 20%">
                <th style="width: 9%; font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <center>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">dawdawd</th>
            </tr>
        </tbody>
    </table>

    {{-- Body --}}
    <table class="table table-bordered">
        <thead>
            <br>
            <h6 style="font-size:15px; color:white">Body</h6>
            <tr>
                <th style="width: 9%; font-size:14px; color:white; background-color: #032A37"><center>Method URL</th>
                <th style="font-size:14px; color:white; background-color: #032A37"><center>Route</th>
            </tr>
        </thead>
        <tbody id="my_tbody">
            <tr style="width: 20%">
                <th style="width: 9%; font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <center>
                </th>
                    <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">dawdawd</th>
                </tr>
            </tbody>
        </table>

        {{-- Response --}}
        <table class="table table-bordered">
            <thead>
                <br>
                <h6 style="font-size:15px; color:white">Response</h6>
                <tr>
                    <th style="width: 9%; font-size:14px; color:white; background-color: #032A37"><center>Method URL</th>
                    <th style="font-size:14px; color:white; background-color: #032A37"><center>Route</th>
                </tr>
            </thead>
            <tbody id="my_tbody">
                <tr style="width: 20%">
                    <th style="width: 9%; font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                        <center>
                    </th>
                    <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">dawdawd</th>
                </tr>
            </tbody>
        </table>
</div>
<div>
    <button type="button" class="btn rounded-pill btn-success" style="position:absolute; bottom: 93.5%; right: 2%;>
        <i class="fas fa-download"></i> Save
    </button>
    <button type="button" class="btn rounded-pill btn-info" style="position:absolute; bottom: 93.5%; right: 7.5%;>
        <i class="fas fa-download"></i> Export
    </button>
</div>
@endsection

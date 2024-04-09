@extends('table.layouttable')
@section('content')

    <head>
        <script src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
    </head>

    <style>
        #table-container {
            display: show;
        }

        table {
            display: inline-block;
        }

        .checkbox {
            display: inline-block;
        }
    </style>

    <div class="card-body">
        {{-- Method UR --}}
        <table class="table table-bordered" id="method_table" style="margin-left: 30px; width:1150px; border:dimgray">
            <thead>
                <h6 style="font-size:15px; color:white; margin-left: 30px; width:1150px">Method URL</h6>
                <tr>
                    <th style="width: 9%; font-size:14px; color:white; background-color: #032A37">
                        <center>Method URL
                    </th>
                    <th style="font-size:14px; color:white; background-color: #032A37">
                        <center>Route
                    </th>
                </tr>
            </thead>
            <tbody id="my_tbody">
                <tr>
                    <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                        <select name="required_param" id="required_param"
                            style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
                            <option value="get">GET</option>
                            <option value="post">POST</option>
                            <option value="put">PUT</option>
                            <option value="patch">PATCH</option>
                            <option value="delete">DELETE</option>
                            <option value="head">HEAD</option>
                            <option value="options">OPTIONS</option>
                        </select>
                    </th>
                    <th id="rount" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">url</th>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="margin-left: 15px; width:1150px" class="mx mx-5">
        <div class="d-flex gap-xxl-5">
            <div>
                <input type="checkbox" id="cb_header" name="cb_header">
                <label for="header" style="font-size:14px; color:white">Headers</label>
            </div>

            <div>
                <input type="checkbox" id="cb_param" name="cb_param">
                <label for="param" style="font-size:14px; color:white">Params</label>
            </div>

            <div>
                <input type="checkbox" id="cb_body" name="cb_body">
                <label for="body" style="font-size:14px; color:white">Body</label>
            </div>

            <div>
                <input type="checkbox" id="cb_response" name="cb_response">
                <label for="response" style="font-size:14px; color:white">Response</label><br>
            </div>
        </div>
    </div>

    <div class="card-body">
        <table class="table table-bordered" name="header_table" id="header_table" style="width:1150px; border:dimgray">
            <thead>
                <br>
                <h6 style="font-size:15px; color:white; margin-left: auto; width:1150px">Headers</h6>
                <tr>
                    <th style="width: 50px; font-size:14px; color:white; background-color: #032A37"><center>No</th>
                    <th style="width: 100px; font-size:14px; color:white; background-color: #032A37;"><center>Key</th>
                    <th style="width: 100px; font-size:14px; color:white; background-color: #032A37"><center>Required</th>
                    <th style="width: 120px; font-size:14px; color:white; background-color: #032A37"><center>Example data</th>
                    <th style="width: 830px; font-size:14px; color:white; background-color: #032A37"><center>Description</th>
                </tr>
            </thead>
            <tbody id="tbody_header">
                <tr id="tr_header">
                    <th id="th_header" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; text-align: center">
                        <input type="text" name="no_header[]" id="no_header" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; width:25px; border: none; text-align: center">

                    </th>

                    <th id="th_header" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                        <input value="" type="text" name="key_header[]" id="key_header" style="background-color: #9DC8D6; width:130px; border: none">

                    </th>
                    <th id="th_header" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                        <select name="required_param" id="required_param" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
                            <option value="o">O</option>
                            <option value="m">M</option>
                            <option value="r">R</option>
                        </select>
                    </th>
                    <th id="th_header" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6;  text-align: center"">
                        <input type="text" name="exampledata_header" id="exampledata_header" style="background-color: #9DC8D6; width: 130px; border: none">

                    </th>
                    <th id="th_header" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6;  text-align: center">
                        <textarea class="form-control" name="description_header[]" id="description_header" rows="1" style="font-size:14px; border:none; background:#9DC8D6; width:720px"></textarea>

                    </th>
                    {{-- สำหรับให้คลิกเพื่อเลือกว่าจะเอาหรือไม่ตอน Export --}}
                    <input type="checkbox" name="checkHeader" id="checkHeader" style="margin-left: 18px; margin-top: 80px">
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        //ข้อมูล No ของ Header
          var data_no_header = "1";
          document.getElementById("no_header").value = data_no_header;
    </script>
    <script>
        //ข้อมูล Key ของ Header
          var data_key_header = getElementById('key_header');
          document.getElementById("key_header").value = data_key_header;
    </script>
    <script>
        //ข้อมูล Example data ของ Header
          var data_exampledata_header = "adwad";
          document.getElementById("exampledata_header").value = data_exampledata_header;
    </script>
     <script>
        //ข้อมูล Description ของ Header
          var data_description_header = "awdawddddd";
          document.getElementById("description_header").value = data_description_header;
    </script>
@endsection

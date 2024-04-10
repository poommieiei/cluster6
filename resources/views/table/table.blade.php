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
</style>

<div class="card-body">
    {{-- Method UR --}}
    <table class="table table-bordered" id="method_table" style="margin-left: 32px; width:1150px; border:dimgray">
        <thead>
            <h6 style="font-size:15px; color:white; margin-left: 32px; width:1150px">Method URL</h6>
            <tr>
                <th style="width: 9%; font-size:14px; color:white; background-color: #032A37"><center>Method URL</th>
                <th style="font-size:14px; color:white; background-color: #032A37"><center>Route</th>
            </tr>
        </thead>
        <tbody id="my_tbody">
            <tr>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <select name="required_param" id="required_param" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
                        <option value="get">GET</option>
                        <option value="post">POST</option>
                        <option value="put">PUT</option>
                        <option value="patch">PATCH</option>
                        <option value="delete">DELETE</option>
                        <option value="head">HEAD</option>
                        <option value="options">OPTIONS</option>
                    </select>
                </th>
                <th id="rount" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" name="rount" id="rount" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; width: 975px; border: none">
                    <script>
                        //ข้อมูล Rount
                          var data_rount = "url";
                          document.getElementById("rount").value = data_rount;
                    </script>
                </th>
            </tr>
        </tbody>
    </table>
</div>

{{-- Check Box Show Table --}}
<div style="margin-left: 15px; width:1150px">
        &nbsp&nbsp&nbsp&nbsp
        <input type="checkbox" id="cb_header" name="cb_header">
        <label for="header" style="font-size:14px; color:white">Headers &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="checkbox" id="cb_param" name="cb_param">
        <label for="param" style="font-size:14px; color:white">Params &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="checkbox" id="cb_body" name="cb_body">
        <label for="body" style="font-size:14px; color:white">Body &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="checkbox" id="cb_response" name="cb_response">
        <label for="response" style="font-size:14px; color:white">Response</label><br>
</div>

{{-- Headers --}}
<div class="card-body" id="table-container-header" style="display: none">
    <table class="table table-bordered" name="header_table" id="header_table" style="width:1150px; border:dimgray; margin-left: 32px">
        <thead>
            <br>
            <h6 style="font-size:15px; color:white; margin-left: 34px; width:1150px">Headers</h6>
            <tr>
                <th style="width: 50px; font-size:14px; color:white; background-color: #032A37"><center>No</th>
                <th style="width: 100px; font-size:14px; color:white; background-color: #032A37;"><center>Key</th>
                <th style="width: 100px; font-size:14px; color:white; background-color: #032A37"><center>Required</th>
                <th style="width: 120px; font-size:14px; color:white; background-color: #032A37"><center>Example data</th>
                <th style="width: 830px; font-size:14px; color:white; background-color: #032A37"><center>Description</th>
                <th style="background: #073B4C; border-top: solid #073B4C; border-top: solid #073B4C; border-right: solid #073B4C; border-bottom: solid #073B4C"></th>
            </tr>
        </thead>
        <tbody id="tbody_header">
            <tr id="tr_header">
                <th id="th_header" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; text-align: center">
                    <input type="text" name="no_header" id="no_header" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; width:25px; border: none; text-align: center">
                    <script>
                        //ข้อมูล No ของ Header
                          var data_no_header = "1";
                          document.getElementById("no_header").value = data_no_header;
                    </script>
                </th>
                <th id="th_header" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" name="key_header" id="key_header" style="background-color: #9DC8D6; width:130px; border: none">
                    <script>
                        //ข้อมูล Key ของ Header
                          var data_key_header = "daada";
                          document.getElementById("key_header").value = data_key_header;
                    </script>
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
                    <script>
                        //ข้อมูล Example data ของ Header
                          var data_exampledata_header = "adwad";
                          document.getElementById("exampledata_header").value = data_exampledata_header;
                    </script>
                </th>
                <th id="th_header" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6;  text-align: center">
                    <textarea class="form-control" name="description_header" id="description_header" rows="1" style="font-size:14px; border:none; background:#9DC8D6; width:720px"></textarea>
                    <script>
                        //ข้อมูล Description ของ Header
                          var data_description_header = "awdawddddd";
                          document.getElementById("description_header").value = data_description_header;
                    </script>
                </th>
                <th style="background: #073B4C; border-top: solid #073B4C; border-top: solid #073B4C; border-right: solid #073B4C; border-bottom: solid #073B4C"></th>
            </tr>
        </tbody>
    </table>
    <br>
    {{--add_row_button--}}
   <div class="custom-div" style="width: 1180px; border: 1px solid dimgray; border:none">
        <div style="display: flex; justify-content: flex-end">
            <button type="button" id="add_row_header" style="color: #F0FFFF; background-color: #312C2C; width: 8%;">
                <i class="bi bi-plus-lg"></i>
            </button>
        </div>
    </div>
    {{-- Add Row Header--}}
    <script>
        function addRow() {
            // Get the table element
            const table = document.getElementById("header_table");
            const tr = document.getElementById("tr_header");

            // Create a new row element
            const newRow = document.createElement("tr");

            // Create a new cell element for each column in the table
            for (let i = 0; i < table.rows[0].cells.length; i++) {
                const newCell = document.createElement("th");
                newRow.appendChild(newCell);
            }
            // Append the new row to the table
            table.appendChild(newRow);
            }
        function copyRow(row) {
            // Create a new row element
            const newRow = document.createElement("tr");
            // Copy the cells from the old row to the new row
            for (let i = 0; i < row.cells.length; i++) {
                const newCell = document.createElement("th");
                newCell.id = 'th_header';
                newCell.style.backgroundColor = '#9DC8D6';
                newCell.innerHTML = row.cells[i].innerHTML;
                newRow.appendChild(newCell);
                //สร้าง icon ตาม row ที่เพิ่ม
                if (i === row.cells.length - 1) {
                    const icon = document.createElement('i');
                    icon.className = 'bi-trash';
                    icon.style.fontSize = '22px';
                    icon.style.color = '#F0FFFF';
                    newCell.style.backgroundColor = 'transparent';
                    newCell.style.borderTop = 'solid #073B4C';
                    newCell.style.borderRight = 'solid #073B4C';
                    newCell.style.borderBottom = 'solid #073B4C';
                    icon.onclick = function() {
                        deleteRow(newRow);
                    };
                    newCell.appendChild(icon);
                }
            }
            //
            row.parentNode.appendChild(newRow);
            }

            // Add an event listener to the Copy button
            document.getElementById("add_row_header").addEventListener("click", function() {
            const row = document.getElementById("tr_header");
            copyRow(row);
            const target = event.target;
            });
            $("table").on("click", ".bi-trash", function() {
            const row = $(this).closest("tr"); // ค้นหาแถวที่ไอคอนอยู่

            // ลบแถว
            row.remove();
            });
    </script>
</div>

{{-- Param --}}
<div class="card-body" id="table-container-param" style="display: none">
    <table class="table table-bordered" name="param_table" id="param_table" style="width:1190px; border:dimgray; margin-left: 32px">
        <thead>
            <br>
            <h6 style="font-size:15px; color:white; margin-left: 34px; width:1150px">Params</h6>
            <tr>
                <th style="width: 50px; font-size:14px; color:white; background-color: #032A37"><center>No</th>
                <th style="width: 100px; font-size:14px; color:white; background-color: #032A37;"><center>Key</th>
                <th style="width: 200px; font-size:14px; color:white; background-color: #032A37;"><center>Param Type</th>
                <th style="width: 120px; font-size:14px; color:white; background-color: #032A37;"><center>Data Type</th>
                <th style="width: 100px; font-size:14px; color:white; background-color: #032A37"><center>Required</th>
                <th style="width: 160px; font-size:14px; color:white; background-color: #032A37"><center>Example data</th>
                <th style="font-size:14px; color:white; background-color: #032A37"><center>Description</th>
                <th style="background: #073B4C; border-top: solid #073B4C; border-top: solid #073B4C; border-right: solid #073B4C; border-bottom: solid #073B4C"></th>
            </tr>
        </thead>
        <tbody id="tbody_param">
            <tr id="tr_param">
                <th id="th_param" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; text-align: center">
                    <input type="text" name="no_param" id="no_param" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; width:25px; border: none; text-align: center">
                    <script>
                        //ข้อมูล No ของ Param
                          var data_no_param = "1";
                          document.getElementById("no_param").value = data_no_param;
                    </script>
                </th>
                <th id="th_param" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" name="key_param" id="key_param" style="background-color: #9DC8D6; width:80px; border: none">
                    <script>
                        //ข้อมูล Key ของ Param
                          var data_key_param = "add";
                          document.getElementById("key_param").value = data_key_param;
                    </script>
                </th>
                <th id="th_param" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <select name="paramtype_param" id="paramtype_param" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
                        <option value="query">Query</option>
                        <option value="route">Route</option>
                    </select>
                </th>
                <th id="th_param" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6;  text-align: center"">
                    <select name="datatype_param" id="datatype_param" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
                        <option value="boolean">Boolean</option>
                        <option value="integer">Integer</option>
                        <option value="number">Number</option>
                        <option value="string">String</option>
                        <option value="enum">Enum</option>
                        <option value="object">Object</option>
                        <option value="array">Array</option>
                    </select>
                </th>
                <th id="th_param" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6;  text-align: center">
                    <center>
                        <select name="required_param" id="required_param" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
                            <option value="o">O</option>
                            <option value="m">M</option>
                            <option value="r">R</option>
                        </select>
                </th>
                <th id="th_param" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; text-align: center">
                    <input type="text" name="exampledata_param" id="exampledata_param" style="background-color: #9DC8D6; width: 80px; border: none">
                    <script>
                        //ข้อมูล Example data ของ Param
                          var data_exampledata_param = "dddd";
                          document.getElementById("exampledata_param").value = data_exampledata_param;
                    </script>
                </th>
                <th id="th_param" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; text-align: center">
                    <textarea class="form-control" name="description_param" id="description_param" rows="1" style="font-size:14px; border:none; background:#9DC8D6; width: 600px"></textarea>
                    <script>
                        //ข้อมูล Description ของ Param
                          var data_description_param = "cccc";
                          document.getElementById("description_param").value = data_description_param;
                    </script>
                </th>
                <th style="background: #073B4C; border-top: solid #073B4C; border-top: solid #073B4C; border-right: solid #073B4C; border-bottom: solid #073B4C"></th>
            </tr>
        </tbody>
    </table>
    <br>
    {{--add_row_button--}}
   <div class="custom-div" style="width: 1180px; border: 1px solid dimgray; border:none">
        <div style="display: flex; justify-content: flex-end">
            <button type="button" id="add_row_param" style="color: #F0FFFF; background-color: #312C2C; width: 8%;">
                <i class="bi bi-plus-lg"></i>
            </button>
        </div>
    </div>
    {{-- Add Row Param--}}
    <script>
        function addRow() {
            // Get the table element
            const table = document.getElementById("param_table");
            const tr = document.getElementById("tr_param");

            // Create a new row element
            const newRow= document.createElement("tr");

            // Create a new cell element for each column in the table
            for (let i = 0; i < table.rows[0].cells.length; i++) {
                const newCell= document.createElement("th");
                newRow.appendChild(newCell);
            }
            // Append the new row to the table
            table.appendChild(newRow);
            }
        function copyRow(row) {
            // Create a new row element
            const newRow = document.createElement("tr");
            // Copy the cells from the old row to the new row
            for (let i = 0; i < row.cells.length; i++) {
                const newCell = document.createElement("th");
                newCell.id = 'th_header';
                newCell.style.backgroundColor = '#9DC8D6';
                newCell.innerHTML = row.cells[i].innerHTML;
                newRow.appendChild(newCell);
                //สร้าง icon ตาม row ที่เพิ่ม
                if (i === row.cells.length - 1) {
                    const icon = document.createElement('i');
                    icon.className = 'bi-trash';
                    icon.style.fontSize = '22px';
                    icon.style.color = '#F0FFFF';
                    newCell.style.backgroundColor = 'transparent';
                    newCell.style.borderRight = 'solid #073B4C';
                    newCell.style.borderBottom = 'solid #073B4C';
                    icon.onclick = function() {
                        deleteRow(newRow);
                    };
                    newCell.appendChild(icon);
                }
            }
            //
            row.parentNode.appendChild(newRow);
            }

            // Add an event listener to the Copy button
            document.getElementById("add_row_param").addEventListener("click", function() {
            const row = document.getElementById("tr_param");
            copyRow(row);
            const target = event.target;
            });
            $("table").on("click", ".bi-trash", function() {
            const row = $(this).closest("tr"); // ค้นหาแถวที่ไอคอนอยู่

            // ลบแถว
            row.remove();
            });
    </script>
</div>

{{-- Body --}}
<div class="card-body" id="table-container-body" style="display: none">
    <table class="table table-bordered" name="body_table" id="body_table" style="width:1190px; border:dimgray; margin-left: 34px">
        <thead>
            <br>
            <h6 style="font-size:15px; color:white; margin-left: 34px; width:1150px">Body</h6>
            <tr>
                <th style="width: 40px; font-size:14px; color:white; background-color: #032A37"><center>No</th>
                <th style="width: 130px; font-size:14px; color:white; background-color: #032A37;"><center>Key</th>
                <th style="width: 130px; font-size:14px; color:white; background-color: #032A37;"><center>Data Type</th>
                <th style="width: 130px; font-size:14px; color:white; background-color: #032A37"><center>Required</th>
                <th style="width: 130px; font-size:14px; color:white; background-color: #032A37"><center>Example data</th>
                <th style="font-size:14px; color:white; background-color: #032A37"><center>Description</th>
                <th style="background: #073B4C; border-top: solid #073B4C; border-top: solid #073B4C; border-right: solid #073B4C; border-bottom: solid #073B4C"></th>
            </tr>
        </thead>
        <tbody id="my_tbody">
            <tr id="tr_body">
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; text-align: center">
                    <input type="text" name="no_body" id="no_body" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; width: 25px; border: none; text-align: center">
                    <script>
                        //ข้อมูล No ของ Param
                          var data_no_body = "1";
                          document.getElementById("no_body").value = data_no_body;
                    </script>
                </th>
                    <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                        <input type="text" name="key_body" id="key_body" style="background-color: #9DC8D6; width: 80px; border: none">
                        <script>
                            //ข้อมูล Key ของ Body
                              var data_key_body = "gggg";
                              document.getElementById("key_body").value = data_key_body;
                        </script>
                    </th>
                    <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                        <select name="datatype_body" id="datatype_body" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
                            <option value="boolean">Boolean</option>
                            <option value="integer">Integer</option>
                            <option value="number">Number</option>
                            <option value="string">String</option>
                            <option value="enum">Enum</option>
                            <option value="object">Object</option>
                            <option value="array">Array</option>
                        </select>
                    </th>
                    <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                        <center>
                        <select name="required_body" id="required_body" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
                            <option value="o">O</option>
                            <option value="m">M</option>
                            <option value="r">R</option>
                        </select>
                    </th>
                    <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                        <input type="text" name="exampledata_body" id="exampledata_body" style="background-color: #9DC8D6; width: 80px; border: none">
                        <script>
                            //ข้อมูล Example data ของ Body
                              var data_exampledata_body = "lll";
                              document.getElementById("exampledata_body").value = data_exampledata_body;
                        </script>
                    </th>
                    <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                        <textarea class="form-control" name="description_body" id="description_body" rows="1" style="font-size:14px; border:none; background:#9DC8D6; width:650px"></textarea>
                        <script>
                            //ข้อมูล Description ของ Body
                              var data_description_body = "dvvv";
                              document.getElementById("description_body").value = data_description_body;
                        </script>
                    </th>
                    <th style="background: #073B4C; border-top: solid #073B4C; border-top: solid #073B4C; border-right: solid #073B4C; border-bottom: solid #073B4C"></th>
                </tr>
            </tbody>
    </table>
    <br>
    {{--add_row_button--}}
    <div class="custom-div" style="width: 1180px; border: 1px solid dimgray; border:none">
        <div style="display: flex; justify-content: flex-end;">
            <button type="button" id="add_row_body" style="color: #F0FFFF; background-color: #312C2C; width: 8%;">
                <i class="bi bi-plus-lg"></i>
            </button>
        </div>
    </div>
    {{-- Add Row Body--}}
    <script>
        function addRow() {
            // Get the table element
            const table = document.getElementById("body_table");
            const tr = document.getElementById("tr_body");

            // Create a new row element
            const newRow= document.createElement("tr");

            // Create a new cell element for each column in the table
            for (let i = 0; i < table.rows[0].cells.length; i++) {
                const newCell= document.createElement("th");
                newRow.appendChild(newCell);
            }
            // Append the new row to the table
            table.appendChild(newRow);
            }
        function copyRow(row) {
            // Create a new row element
            const newRow = document.createElement("tr");
            // Copy the cells from the old row to the new row
            for (let i = 0; i < row.cells.length; i++) {
                const newCell = document.createElement("th");
                newCell.id = 'th_header';
                newCell.style.backgroundColor = '#9DC8D6';
                newCell.innerHTML = row.cells[i].innerHTML;
                newRow.appendChild(newCell);
                //สร้าง icon ตาม row ที่เพิ่ม
                if (i === row.cells.length - 1) {
                    const icon = document.createElement('i');
                    icon.className = 'bi-trash';
                    icon.style.fontSize = '22px';
                    icon.style.color = '#F0FFFF';
                    newCell.style.backgroundColor = 'transparent';
                    newCell.style.borderRight = 'solid #073B4C';
                    newCell.style.borderBottom = 'solid #073B4C';
                    icon.onclick = function() {
                        deleteRow(newRow);
                    };
                    newCell.appendChild(icon);
                }
            }
            //
            row.parentNode.appendChild(newRow);
            }

            // Add an event listener to the Copy button
            document.getElementById("add_row_body").addEventListener("click", function() {
            const row = document.getElementById("tr_body");
            copyRow(row);
            const target = event.target;
            });
            $("table").on("click", ".bi-trash", function() {
            const row = $(this).closest("tr"); // ค้นหาแถวที่ไอคอนอยู่

            // ลบแถว
            row.remove();
            });
    </script>
</div>

{{-- Response --}}
<br>
<div class="card-body" id="table-container-statuscode" style="display: none">
    <br>
    <table class="table table-bordered" name="response_table" id="response_table" style="width:1190px; margin-left: 32px; border:dimgray">
        <thead>
    <div class="custom-div" style="width: 1180px; border: 1px solid dimgray; border:none">
        {{--button--}}
        <div style="display: flex; justify-content: flex-end;">
            <h6 style="font-size:15px; color:white; margin-left: 35px; width:1150px">Response</h6>
            <button type="button" id="add_row_statuscode" style="color: #F0FFFF; background-color: #312C2C; width: 200px;">
                <i class="">Create New Response</i>
            </button>
        </div>
    </div>
            <tr>
                <th style="width: 100px; font-size:14px; color:white; background-color: #032A37"><center>Status Code</th>
                <th style="width: px; font-size:14px; color:white; background-color: #032A37"><center>Key</th>
                <th style="width: 120px; font-size:14px; color:white; background-color: #032A37"><center>Data Type</th>
                <th style="width: 150px; font-size:14px; color:white; background-color: #032A37"><center>Example Data</th>
                <th style="width: 600px; font-size:14px; color:white; background-color: #032A37"><center>Description</th>
                <th style="background: #073B4C; border-top: solid #073B4C; border-top: solid #073B4C; border-right: solid #073B4C; border-bottom: solid #073B4C"></th>
            </tr>
        </thead>
        <tbody id="my_tbody">
            <tr id="tr_response">
                <th id="th_statuscode" style="width: 100px; font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; text-align: center; height: 54px">
                    <input type="text" name="statuscode" id="statuscode" style="background-color: #9DC8D6; width: 60px; border: none">
                    <script>
                        //ข้อมูล Statuscode ของ Response
                          var data_statuscode_response = "201";
                          document.getElementById("statuscode").value = data_statuscode_response;
                    </script>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" name="key_response" id="key_response" style="background-color: #9DC8D6; width:100%; border: none">
                    <script>
                        //ข้อมูล Key ของ Response
                          var data_key_response= "dawa";
                          document.getElementById("key_response").value = data_key_response;
                    </script>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <select name="datatype_body" id="datatype_response" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
                        <option value="boolean">Boolean</option>
                        <option value="integer">Integer</option>
                        <option value="number">Number</option>
                        <option value="string">String</option>
                        <option value="enum">Enum</option>
                        <option value="object">Object</option>
                        <option value="array">Array</option>
                    </select>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" name="exampledata_response" id="exampledata_response" style="background-color: #9DC8D6; width:100%; border: none">
                    <script>
                        //ข้อมูล Example data ของ Response
                          var data_exampladata_response= "awdawd";
                          document.getElementById("exampledata_response").value = data_exampladata_response;
                    </script>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <textarea class="form-control" name="description_response" id="description_response" rows="1" style="font-size:14px; border:none; background:#9DC8D6; width:650px"></textarea>
                     <script>
                        //ข้อมูล Description ของ Response
                            var data_description_response = "dvvv";
                            document.getElementById("description_response").value = data_description_response;
                    </script>
                </th>
                <th style="background: #073B4C; border-top: solid #073B4C; border-top: solid #073B4C; border-right: solid #073B4C; border-bottom: solid #073B4C"></th>
            </tr>
            </tr>
        </tbody>
</div>
    {{-- Add Row Response --}}
    <script>
        function addRow() {
            // Get the table element
            const table = document.getElementById("response_table");
            const tr = document.getElementById("tr_response");

            // Create a new row element
            const newRow = document.createElement("tr");

            // Create a new cell element for each column in the table
            for (let i = 0; i < table.rows[0].cells.length; i++) {
                const newCell = document.createElement("th");
                newRow.appendChild(newCell);
            }
            // Append the new row to the table
            table.appendChild(newRow);
            }
        function copyRow(row) {
            // Create a new row element
            const newRow = document.createElement("tr");
            // Copy the cells from the old row to the new row
            for (let i = 0; i < row.cells.length; i++) {
                const newCell = document.createElement("th");
                newCell.id = 'th_header';
                newCell.style.backgroundColor = '#9DC8D6';
                newCell.innerHTML = row.cells[i].innerHTML;
                newRow.appendChild(newCell);
                //สร้าง icon ตาม row ที่เพิ่ม
                if (i === row.cells.length - 1) {
                    const icon = document.createElement('i');
                    icon.className = 'bi-trash';
                    icon.style.fontSize = '22px';
                    icon.style.color = '#F0FFFF';
                    newCell.style.backgroundColor = 'transparent';
                    newCell.style.borderTop = 'solid #073B4C';
                    newCell.style.borderRight = 'solid #073B4C';
                    newCell.style.borderBottom = 'solid #073B4C';
                    icon.onclick = function() {
                        deleteRow(newRow);
                    };
                    newCell.appendChild(icon);
                }
            }
            //
            row.parentNode.appendChild(newRow);
            }

            // Add an event listener to the Copy button
            document.getElementById("add_row_statuscode").addEventListener("click", function() {
            const row = document.getElementById("tr_response");
            copyRow(row);
            const target = event.target;
            });
            $("table").on("click", ".bi-trash", function() {
            const row = $(this).closest("tr"); // ค้นหาแถวที่ไอคอนอยู่

            // ลบแถว
            row.remove();
            });
    </script
</div>

{{-- check box show header table --}}

<script>
    const checkbox_header = document.getElementById('cb_header');
    const tableContainer_header = document.getElementById('table-container-header');

    checkbox_header.addEventListener('change', () => {
        tableContainer_header.style.display = checkbox_header.checked ? 'block' : 'none';
        });
</script>

{{-- check box show param table --}}
<script>
    const checkbox_param = document.getElementById('cb_param');
    const tableContainer_param = document.getElementById('table-container-param');

    checkbox_param.addEventListener('change', () => {
        tableContainer_param.style.display = checkbox_param.checked ? 'block' : 'none';
        });
</script>

{{-- check box show body table --}}
<script>
    const checkbox_body = document.getElementById('cb_body');
    const tableContainer_body = document.getElementById('table-container-body');

    checkbox_body.addEventListener('change', () => {
        tableContainer_body.style.display = checkbox_body.checked ? 'block' : 'none';
        });
</script>

{{-- check box show response table --}}
<script>
    const checkbox_response = document.getElementById('cb_response');
    const tableContainer_response = document.getElementById('table-container-statuscode');

    checkbox_response.addEventListener('change', () => {
        tableContainer_response.style.display = checkbox_response.checked ? 'block' : 'none';
        });
</script>

<script>
    const checkbox_response = document.getElementById('cb_response');
    const tableContainer_response = document.getElementById('table-container-response');

    checkbox_response.addEventListener('change', () => {
        tableContainer_response.style.display = checkbox_response.checked ? 'block' : 'none';
        });
</script>

@endsection

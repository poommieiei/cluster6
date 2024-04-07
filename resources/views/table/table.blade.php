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
    <table class="table table-bordered" id="method_table" style="margin-left: 35px; width:1150px; border:dimgray">
        <thead>
            <br>
            <h6 style="font-size:15px; color:white; margin-left: 35px; width:1150px">Method URL</h6>
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
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">url</th>
            </tr>
        </tbody>
    </table>

<div style="margin-left: 20px; width:1150px">
        &nbsp&nbsp&nbsp&nbsp
        <input type="checkbox" id="cb_header" name="header">
        <label for="header" style="font-size:14px; color:white">Headers &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="checkbox" id="cb_param" name="param">
        <label for="param" style="font-size:14px; color:white">Params &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="checkbox" id="cb_body" name="body">
        <label for="body" style="font-size:14px; color:white">Body &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="checkbox" id="cb_response" name="response">
        <label for="response" style="font-size:14px; color:white">Response</label><br>
</div>

{{-- Headers --}}
<div class="card-body" id="table-container-header" style="display: none">
    <table class="table table-bordered" id="header_table" style="margin-left: 35px; width:1150px; border:dimgray">
        <input type="checkbox" id="checkHeader" name="checkHeader">
        <thead>
            <br>
            <h6 style="font-size:15px; color:white; margin-left: 35px; width:1150px">Headers</h6>
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
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" id="no_body" style="background-color: #9DC8D6; width:40%; border: none" style="text-align: center;">
                    <script>
                        //ข้อมูล No ของ Body
                          var data_no_body = "1";
                          document.getElementById("no_param").value = no_body;
                    </script>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" id="key_header" style="background-color: #9DC8D6; width:100%; border: none">
                    <script>
                        //ข้อมูล Key ของ Header
                          var data_key_header = "daada";
                          document.getElementById("key_header").value = data_key_header;
                    </script>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <center>
                    <select name="required_header" id="required_header" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
                        <option value="o">O</option>
                        <option value="m">M</option>
                        <option value="r">R</option>
                    </select>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" id="exampledata_header" style="background-color: #9DC8D6; width:100%; border: none">
                    <script>
                        //ข้อมูล Example data ของ Header
                          var data_exampledata_header = "adwad";
                          document.getElementById("exampledata_header").value = data_exampledata_header;
                    </script>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" id="description_header" style="background-color: #9DC8D6; width:100%; border: none">
                    <script>
                        //ข้อมูล Description ของ Header
                          var data_description_header = "awdawddddd";
                          document.getElementById("description_header").value = data_description_header;
                    </script>
                </th>
            </tr>
        </tbody>
    </table>
</div>

{{-- Params --}}
<div class="card-body" id="table-container-param" style="display: none">
    <table class="table table-bordered" id="param_table" style="margin-left: 35px; width:1150px; border:dimgray">
        <input type="checkbox" id="checkParam" name="checkParam">
        <thead>
            <br>
            <h6 style="font-size:15px; color:white; margin-left: 35px; width:1150px">Params</h6>
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
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; text-align: center;">
                    <input type="text" id="no_param" style="background-color: #9DC8D6; width:40%; border: none" style="text-align: center;">
                    <script>
                        //ข้อมูล No ของ Param
                          var data_no_param = "1";
                          document.getElementById("no_param").value = data_no_param;
                    </script>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" id="key_param" style="background-color: #9DC8D6; width:100%; border: none">
                    <script>
                        //ข้อมูล Key ของ Param
                          var data_key_param = "add";
                          document.getElementById("key_param").value = data_key_param;
                    </script>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <select name="param_type" id="paramtype_param" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
                        <option value="query">Query</option>
                        <option value="route">Route</option>
                    </select>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
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
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <center>
                    <select name="required_param" id="required_param" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
                        <option value="o">O</option>
                        <option value="m">M</option>
                        <option value="r">R</option>
                    </select>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" id="exampledata_param" style="background-color: #9DC8D6; width:100%; border: none">
                    <script>
                        //ข้อมูล Example data ของ Param
                          var data_exampledata_param = "dddd";
                          document.getElementById("exampledata_param").value = data_exampledata_param;
                    </script>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" id="description_param" style="background-color: #9DC8D6; width:100%; border: none">
                    <script>
                        //ข้อมูล Description ของ Param
                          var data_description_param = "cccc";
                          document.getElementById("description_param").value = data_description_param;
                    </script>
                </th>
            </tr>
        </tbody>
    </table>
</div>

{{-- Body --}}
<div class="card-body" id="table-container-body" style="display: none">
    <table class="table table-bordered" id="body" style="margin-left: 35px; width:1150px; border:dimgray">
        <input type="checkbox" id="checkBody" name="checkBody">
        <thead>
            <br>
            <h6 style="font-size:15px; color:white; margin-left: 35px; width:1150px">Body</h6>
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
            <tr>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" id="no_body" style="background-color: #9DC8D6; width:40%; border: none" style="text-align: center;">
                    <script>
                        //ข้อมูล No ของ Body
                          var data_no_body = "1";
                          document.getElementById("no_param").value = no_body;
                    </script>
                </th>
                    <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                        <input type="text" id="key_body" style="background-color: #9DC8D6; width:100%; border: none">
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
                        <input type="text" id="exampledata_body" style="background-color: #9DC8D6; width:100%; border: none">
                        <script>
                            //ข้อมูล Example data ของ Body
                              var data_exampledata_body = "lll";
                              document.getElementById("exampledata_body").value = data_exampledata_body;
                        </script>
                    </th>
                    <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                        <input type="text" id="description_body" style="background-color: #9DC8D6; width:100%; border: none">
                        <script>
                            //ข้อมูล Description ของ Body
                              var data_description_body = "dvvv";
                              document.getElementById("description_body").value = data_description_body;
                        </script>
                    </th>
                </tr>
            </tbody>
        </table>
</div>

{{-- Response --}}
<div class="card-body" id="table-container-response" style="display: none">
    <table class="table table-bordered" id="response_table" style="margin-left: 35px; width:100px">
        <thead>
            <br>
            <h6 style="font-size:15px; color:white; margin-left: 35px; width:1150px">Response</h6>
            <tr>
                <th style="width: 9%; font-size:14px; color:white; background-color: #032A37"><center>Status Code</th>
            </tr>
        </thead>
        <tbody id="my_tbody">
            <tr>
                <th style="width: 9%; font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" id="statuscode" style="background-color: #9DC8D6; width:55% ; border: none">
                    <script>
                        //ข้อมูล Status code ของ Response
                          var data_statuscode_response= "dvvvdddd";
                          document.getElementById("statuscode").value = data_statuscode_response;
                    </script>
                    <a href="#" class="text-decoration-none text-white me-3">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                </th>
            </tr>
        </tbody>
    <table class="table table-bordered" id="response" style="margin-left: 35px; width:957px">
        <thead>
            <tr>
                <th style="width: 9%; font-size:14px; color:white; background-color: #032A37"><center>Key</th>
                <th style="width: 12%; font-size:14px; color:white; background-color: #032A37"><center>Data Type</th>
                <th style="width: 15%; font-size:14px; color:white; background-color: #032A37"><center>Example Data</th>
                <th style="font-size:14px; color:white; background-color: #032A37"><center>Description</th>
        </thead>
        <tbody id="my_tbody">
            <tr>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" id="key_response" style="background-color: #9DC8D6; width:100%; border: none">
                    <script>
                        //ข้อมูล Key ของ Response
                          var data_key_response= "dawa";
                          document.getElementById("key_response").value = data_key_response;
                    </script>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" id="datatype_response" style="background-color: #9DC8D6; width:100%; border: none">
                    <script>
                        //ข้อมูล Data type ของ Response
                          var data_datatype_response= "awdawd";
                          document.getElementById("datatype_response").value = data_datatype_response;
                    </script>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" id="exampledata_response" style="background-color: #9DC8D6; width:100%; border: none">
                    <script>
                        //ข้อมูล Example data ของ Response
                          var data_exampladata_response= "awdawd";
                          document.getElementById("exampledata_response").value = data_exampladata_response;
                    </script>
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" id="description_response" style="background-color: #9DC8D6; width:100%; border: none">
                    <script>
                        //ข้อมูล Description ของ Response
                          var data_description_response= "awdawd";
                          document.getElementById("description_response").value = data_description_response;
                    </script>
                </th>
            </tr>
        </tbody>
    </table>
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
    const tableContainer_response = document.getElementById('table-container-response');

    checkbox_response.addEventListener('change', () => {
        tableContainer_response.style.display = checkbox_response.checked ? 'block' : 'none';
        });
</script>

<div>
    <!-- Save Button -->
    <button type="button" class="btn rounded-pill btn-success" id="save_btn" style="position:absolute; bottom: 93.5%; right: 2%; width: 8%">
        <i class="fas fa-download"></i> Save
    </button>

    <!-- sweetalert 2 for save button -->
    <script>
        $('#save_btn').click(function(){
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Your work has been saved.",
                showConfirmButton: false,
                timer: 1500
            });
        });
    </script>

      <!-- Export Button -->
    <button type="button" id="export_button"class="btn rounded-pill btn-info" style="position:absolute; bottom: 93.5%; right: 11%; width: 8%">
        <i class="fas fa-download"></i> Export
    </button>

    <!-- sweetalert 2 for Export button -->
     <script>
      $('#export_button').click(function(){
       Swal.fire({
        title: "Are you sure you save the changes?",
        text: "Your changes will not appear if you  don't save them.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Export"
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
            title: "Exported!",
            text: "Your file has been export.",
            icon: "success"
            });
        }
        });
    })
    </script>

</div>
@endsection

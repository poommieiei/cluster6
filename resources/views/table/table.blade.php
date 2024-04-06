@extends('table.layouttable')
@section('content')

<style>
    #table-container {
  display: show;
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
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6"><center>1</th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" id="key_header" style="background-color: #9DC8D6; width:100%; border: none">
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
                    <input type="text" id="key_header" style="background-color: #9DC8D6; width:100%; border: none">
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" id="key_header" style="background-color: #9DC8D6; width:100%; border: none">
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
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6"><center>1</th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" id="key_header" style="background-color: #9DC8D6; width:100%; border: none">
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <select name="param_type" id="param_type" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
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
                    <input type="text" id="key_header" style="background-color: #9DC8D6; width:100%; border: none">
                </th>
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                    <input type="text" id="key_header" style="background-color: #9DC8D6; width:100%; border: none">
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
            <tr style="width: 20%">
                <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6"><center>1</th>
                    <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                        <input type="text" id="key_header" style="background-color: #9DC8D6; width:100%; border: none">
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
                        <input type="text" id="key_header" style="background-color: #9DC8D6; width:100%; border: none">
                    </th>
                    <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                        <input type="text" id="key_header" style="background-color: #9DC8D6; width:100%; border: none">
                    </th>
                </tr>
            </tbody>
        </table>
</div>

{{-- Response --}}
<div class="card-body" id="table-container-response" style="display: none">
    <table class="table table-bordered" id="response_table" style="margin-left: 35px; width:100px; ">
        <thead>
            <br>
            <h6 style="font-size:15px; color:white; margin-left: 35px; width:1150px">Response</h6>
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
    <table class="table table-bordered" id="response" style="margin-left: 35px; width:100px">
        <thead>
            <br>
            <h6 style="font-size:15px; color:white; margin-left: 35px; width:1150px">Response</h6>
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

    <!-- Save Alert -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
    </svg>
    <div class="modal" id="save" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="col-md-10 col-md-offset-1">
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div> Your work has been saved </div>
                </div>
            </div>
        </div>
    </div>

    <!-- for save modal -->
    <script>
        // Show Modal
        document.getElementById("save_btn").addEventListener("click", showModal);
        function showModal(){
            var save = new bootstrap.Modal(document.getElementById('save'));
            save.show();
        }

        // Hide Modal
        var modal = document.getElementById('save');
        modal.addEventListener('click', function(event){
            if(event.target === modal){
                var save = new bootstrap.Modal(document.getElementById('save'));
                save.hide();
            }
        });
    </script>

    <!-- Export Button -->
    <button type="button" class="btn rounded-pill btn-info" style="position:absolute; bottom: 93.5%; right: 11%; width: 8%">
        <i class="fas fa-download"></i> Export
    </button>
</div>
@endsection

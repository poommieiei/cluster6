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

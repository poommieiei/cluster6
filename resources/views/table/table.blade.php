@extends('table.layouttable')

@section('service')
    <ul id="sidebarnav" class="pt-4" style="background-color: #0E566E;">
        @foreach ($request as $req)
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="/collection/{{ $id }}/request/{{ $req->id }}" aria-expanded="false"
                    style="text-decoration: none">
                    <?php
                    if($req->method_request == "GET"){
                    ?>
                    <i class="hide-menu" style="font-size:20px; color: #54FD46">{{ $req->method_request }}
                        <span style="font-size:20px; color:ghostwhite">{{ $req->request_name }}</span>
                    </i>

                    <?php
                    }else if($req->method_request == "POST") {
                        ?>
                    <i class="hide-menu" style="font-size:20px; color: #e1ff35">{{ $req->method_request }}
                        <span style="font-size:20px; color:ghostwhite">{{ $req->request_name }}</span>
                    </i>

                    <?php
                    }else if($req->method_request == "PUT") {
                        ?>
                    <i class="hide-menu" style="font-size:20px; color: rgb(47, 103, 255)">{{ $req->method_request }}
                        <span style="font-size:20px; color:ghostwhite">{{ $req->request_name }}</span>
                    </i>

                    <?php
                    }else if($req->method_request == "PATCH") {
                        ?>
                    <i class="hide-menu" style="font-size:20px; color: rgb(199, 77, 255)">{{ $req->method_request }}
                        <span style="font-size:20px; color:ghostwhite">{{ $req->request_name }}</span>
                    </i>

                    <?php
                    }else if($req->method_request == "DELETE") {
                        ?>
                    <i class="hide-menu" style="font-size:20px; color: rgb(255, 157, 0)">{{ $req->method_request }}
                        <span style="font-size:20px; color:ghostwhite">{{ $req->request_name }}</span>
                    </i>

                    <?php
                    }else if($req->method_request == "HEAD") {
                        ?>
                    <i class="hide-menu" style="font-size:20px; color: rgb(60, 255, 0)">{{ $req->method_request }}
                        <span style="font-size:20px; color:ghostwhite">{{ $req->request_name }}</span>
                    </i>

                    <?php
                    }else if($req->method_request == "OPTIONS") {
                        ?>
                    <i class="hide-menu" style="font-size:20px; color: pink">{{ $req->method_request }}
                        <span style="font-size:20px; color:ghostwhite">{{ $req->request_name }}</span>
                    </i>

                    <?php
                    }
                    ?>
                </a>
            </li>
        @endforeach
    </ul>
@endsection

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

    <form action="/ExportTable" method="POST">
        @csrf
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <div class="ms-auto text-end"></div>

                    <!-- Button Layout -->
                    <div>
                        <!-- Export Button -->

                        <button type="submit" id="export_button"class="btn rounded-pill btn-info"
                            style="margin-left: -12%; position:relative">
                            <i class="fas fa-download"></i> Export
                        </button>


                        {{-- <script>
                        $('#export_button').click(function() {
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
                                } else {
                                    Swal.fire({
                                        title: "Cancelled!",
                                        icon: "error"
                                    });
                                }
                            });
                        })
                    </script> --}}
                    </div>
                    {{-- <div>
                    <!-- Save Button -->
                    <button type="button" id="save_btn" class="btn rounded-pill btn-success"
                        style="position:relative">
                        <i class="fas fa-download"></i> Save
                    </button>

                    <!-- sweetalert 2 for save button -->
                    <script>
                        $('#save_btn').click(function() {
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: "Your work has been saved.",
                                showConfirmButton: false,
                                timer: 1500
                            });
                        });
                    </script>
                </div> --}}
                </div>
            </div>
        </div>

        <div class="card-body">
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
                                <option value="{{ $reqIndex->method_request }}" @required(true)>
                                    {{ $reqIndex->method_request }}</option>
                                <option value="get">GET</option>
                                <option value="post">POST</option>
                                <option value="put">PUT</option>
                                <option value="patch">PATCH</option>
                                <option value="delete">DELETE</option>
                                <option value="head">HEAD</option>
                                <option value="options">OPTIONS</option>
                            </select>
                        </th>
                        <th id="rount" name="test" style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                            <input type="text" name="Route" value="{{ $reqIndex->method_url }}" style="background-color: transparent;border: none;width: 1000px" readonly>
                        </th>
                    </tr>

                </tbody>
            </table>
        </div>

        <div style="margin-left: 15px; width:1150px">
            <input type="checkbox" id="cb_header" name="cb_header">
            <label for="header" style="font-size:14px; color:white; margin-right: 70px;">Headers</label>

            <input type="checkbox" id="cb_param" name="cb_param">
            <label for="param" style="font-size:14px; color:white; margin-right: 70px;">Params</label>

            <input type="checkbox" id="cb_body" name="cb_body">
            <label for="body" style="font-size:14px; color:white; margin-right: 70px;">Body</label>

            <input type="checkbox" id="cb_response" name="cb_response">
            <label for="response" style="font-size:14px; color:white; margin-right: 70px;">Response</label><br>
        </div>
        {{-- Param --}}
        

        {{-- Body --}}
        <div class="card-body" id="table-container-body" style="display: none">
            <table class="table table-bordered" name="body_table" id="body_table" style="width:1150px; border:dimgray">
                <thead>
                    <br>
                    <h6 style="font-size:15px; color:white; margin-left: 35px; width:1150px">Body</h6>
                    <tr>
                        <th style="width: 40px; font-size:14px; color:white; background-color: #032A37">
                            <center>No
                        </th>
                        <th style="width: 130px; font-size:14px; color:white; background-color: #032A37;">
                            <center>Key
                        </th>
                        <th style="width: 130px; font-size:14px; color:white; background-color: #032A37;">
                            <center>Data Type
                        </th>
                        <th style="width: 130px; font-size:14px; color:white; background-color: #032A37">
                            <center>Required
                        </th>
                        <th style="width: 130px; font-size:14px; color:white; background-color: #032A37">
                            <center>Example data
                        </th>
                        <th style="font-size:14px; color:white; background-color: #032A37">
                            <center>Description
                        </th>
                    </tr>
                </thead>
                <tbody id="my_tbody">
                    <tr id="tr_body">
                        <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; text-align: center">
                            <input type="text" name="no_body[]" id="no_body" value="1" readonly
                            style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; width: 25px; border: none; text-align: center">
                        </th>
                        <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                            <input type="text" name="key_body[]" id="key_body"
                                style="background-color: #9DC8D6; width: 80px; border: none">

                        </th>
                        <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                            <select name="datatype_body[]" id="datatype_body"
                                style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
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
                                <select name="required_body[]" id="required_body"
                                    style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
                                    <option value="o">O</option>
                                    <option value="m">M</option>
                                    <option value="r">R</option>
                                </select>
                        </th>
                        <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                            <input type="text" name="exampledata_body[]" id="exampledata_body"
                                style="background-color: #9DC8D6; width: 80px; border: none">

                        </th>
                        <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                            <textarea class="form-control" name="description_body[]" id="description_body" rows="1"
                                style="font-size:14px; border:none; background:#9DC8D6; width:650px"></textarea>

                        </th>
                    </tr>
                </tbody>
            </table>
            <br>
            <th style="font-size:14px; border-color:#073B4C; background-color: #073B4C; text-align: center">
                <div style="padding-left: 800px">
                    <button type="button" onclick="addRowBody()"
                        style="color: #F0FFFF; background-color: Black; width: 8%; margin-left:auto;">
                        <i class="bi bi-plus-lg"></i>
                    </button>
                </div>

            </th>
        </div>

        <script>
            function addRowBody() {
                const table = document.getElementById("body_table");
                const tr_body = document.getElementById("tr_body");
                const tbody = document.getElementById("my_tbody");

                const index = table.rows.length;
                console.log(index);

                $('#body_table tr:last').after(`
                    <tr id="tr_body">
                        <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; text-align: center">
                            <input type="text" name="no_body[]" id="no_body" value="${index}" readonly
                                style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; width: 25px; border: none; text-align: center">

                        </th>
                        <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                            <input type="text" name="key_body[]" id="key_body"
                                style="background-color: #9DC8D6; width: 80px; border: none">

                        </th>
                        <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                            <select name="datatype_body[]" id="datatype_body"
                                style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
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
                                <select name="required_body[]" id="required_body"
                                    style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6; border: none">
                                    <option value="o">O</option>
                                    <option value="m">M</option>
                                    <option value="r">R</option>
                                </select>
                        </th>
                        <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                            <input type="text" name="exampledata_body[]" id="exampledata_body"
                                style="background-color: #9DC8D6; width: 80px; border: none">

                        </th>
                        <th style="font-size:14px; color:rgb(0, 0, 0); background-color: #9DC8D6">
                            <textarea class="form-control" name="description_body[]" id="description_body" rows="1"
                                style="font-size:14px; border:none; background:#9DC8D6; width:650px"></textarea>

                        </th>
                    </tr>
                `)
            }
        </script>

    </form>
    {{-- checkbox_header.addEventListener('change', () => {
    tableContainer_header.style.display = checkbox_header.checked ? 'block' : 'none';
    }); --}}

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
@endsection

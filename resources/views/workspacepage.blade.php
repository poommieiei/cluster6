@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row py-4">

            <h1 class="text text-center">My Workspace</h1>

            {{-- card --}}
            <div class="card">
                <div class="card-header">
                    <div class="card-title col-12">
                        <h3 class="text text-center">workspace name1</h3>
                        <div class="card-tools text-right">
                            <p class="btn btn-warning text-light">
                                <i class="fas fa-edit"></i>แก้ไขชื่อ
                            </p>
                            <p class="btn btn-danger text-light">
                                <i class="fa fa-trash"></i> ลบ
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title col-12">
                        <h3 class="text text-center">workspace name2</h3>
                        <div class="card-tools text-right">
                            <p class="btn btn-warning text-light">
                                <i class="fas fa-edit"></i>แก้ไขชื่อ
                            </p>
                            <p class="btn btn-danger text-light">
                                <i class="fa fa-trash"></i> ลบ
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title col-12">
                        <h3 class="text text-center">workspace name3</h3>
                        <div class="card-tools text-right">
                            <p class="btn btn-warning text-light">
                                <i class="fas fa-edit"></i>แก้ไขชื่อ
                            </p>
                            <p class="btn btn-danger text-light">
                                <i class="fa fa-trash"></i> ลบ
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- close card --}}

        </div>
    </div>
</div>
@endsection

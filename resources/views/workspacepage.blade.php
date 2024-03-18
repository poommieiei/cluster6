@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row py-4">

            <h1 class="text text-center">My Workspace</h1>
            <a href="/viewinsert" class="btn btn-primary">Create Workspace</a>

            {{-- card --}}
            <div class="card">
                <div class="card-header">
                    <div class="card-title row-12">
                        <h3 class="text text-center">workspace name1</h3>
                        <div class="card-tools text-right">
                            <a href="#" class="btn btn-info">ดู</a>
                            <a href="#" class="btn btn-warning">แก้ไขชื่อ</a>
                            <a href="#" class="btn btn-danger">ลบ</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title col-12">
                        <h3 class="text text-center">workspace name2</h3>
                        <div class="card-tools text-right">
                            <a href="#" class="btn btn-info">ดู</a>
                            <a href="#" class="btn btn-warning">แก้ไขชื่อ</a>
                            <a href="#" class="btn btn-danger">ลบ</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title col-12">
                        <h3 class="text text-center">workspace name3</h3>
                        <div class="card-tools text-right">
                            <a href="#" class="btn btn-info">ดู</a>
                            <a href="#" class="btn btn-warning">แก้ไขชื่อ</a>
                            <a href="#" class="btn btn-danger">ลบ</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- close card --}}

        </div>
    </div>
</div>
@endsection

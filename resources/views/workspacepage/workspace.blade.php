@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row py-4">

            <h1 class="text text-center">My Workspace</h1>
            <a href="/viewinsert" class="btn btn-primary">Create Workspace</a>

            {{-- card --}}
            @foreach ($workspaces as $item)
                <div class="card">
                    <div class="card-header">
                        <h3 class="text text-center">{{ $item->workspace_name}}</h3>
                            <div class="text text-center">
                                <a href="#" class="btn btn-info">ดู</a>
                                <a href="#" class="btn btn-warning">แก้ไขชื่อ</a>
                                <a href="{{ route('deleteworkspace' , $item->id )}} " class="btn btn-danger" onclick="">ลบ</a>
                            </div>
                    </div>
                </div>
            @endforeach

            {{-- close card --}}

        </div>
    </div>
</div>
@endsection

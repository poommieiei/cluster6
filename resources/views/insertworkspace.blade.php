@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row py-4">

            <form method="POST" action="/insertWrokspace">
                @csrf
                <div class="form-group">
                    <label for="title">ชื่อ Workspace</label>
                    <input type="text" name="workspacename" class="form-control">
                </div>
                <div class="text text-center py-6">
                    <input type="submit" value="Save" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
</div>
@endsection

@extends('layouts.layout')
@section('title', 'Account')
@section('content')
<div class="container mx-4">
    <div class="row">
        <div class="col-md-6" style="width: 300px">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ url('assets/assets/for-cluster6/USER ICON.png') }}" alt="Account" class="light-logo" style="width:250px; margin:0px" />
                </div>
            </div>
        </div>
        <div class="col-md-6 py-4" style="padding: 10px">
            <div class="row justify-content-end py-2">
                <span class="username-email border border-2 d-block text-left rounded"
                style="color:floralwhite; font-size:25px; padding: 10px; background-color:rgb(73, 73, 73)">Name : {{ $user->name }}</span>
            </div>
            <div class="row justify-content-end py-4">
                <span class="username-email border border-2 d-block text-left rounded"
                style="color:floralwhite; font-size:25px; padding: 10px; background-color:rgb(73, 73, 73)">Email : {{ $user->email }}</span>
            </div>
        </div>
    </div>
</div>
@endsection

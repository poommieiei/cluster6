@extends('layouts.layout')
@section('title','User Account')
@section('content')
<style>
    .custom-container {
        width: 1400px;
        height: 320px;
    }
    .custom-image {
        width: 250px;
        margin: 0;
    }
    .custom-text {
        color: floralwhite;
        font-size: 25px;
        padding: 10px;
    }
</style>

<div class="container mx-4">
    <div class="row">
        <div class="col-md-6" style="width: 300px">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://static-00.iconduck.com/assets.00/user-2-account-icon-2048x2046-oucjsuyg.png" alt="Account" class="custom-image rounded-circle" />
                </div>
            </div>
        </div>
        <div class="col-md-6 py-4" style="padding: 10px">
            <div class="row justify-content-end py-2">
                <span class="custom-text" value="name">
                    {{ Auth::user()->name }}</span>
            </div>
            <div class="row justify-content-end py-4">
                <span class="custom-text" value="email">
                    {{ Auth::user()->email }} </span>
                
            </div>
        </div>
    </div>
</div>
@endsection

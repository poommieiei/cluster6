@extends('layouts.layout')
@section('title', 'Account')
@section('content')
<style>
    .container{
        width: 800px;
        height: 320px;

    }
    
</style>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ url('assets/assets/for-cluster6/USER ICON.png') }}" alt="Account" class="light-logo" style="width:250px; margin:0px" />
                </div>
            </div>
        </div>
        <div class="col-md-6" style="padding: 40px">
            <div class="row justify-content-end">
                <span class="border border-2 d-block text-left" style="color:floralwhite; font-size:25px; padding: 10px; width:500px">Roberto</span>
            </div>
            <div class="row justify-content-end py-4">
                <span class="border border-2 d-block text-left" style="color:floralwhite; font-size:25px; padding: 10px;">Roberto@gmail.com</span>
            </div>
        </div>
    </div>
</div>

@endsection
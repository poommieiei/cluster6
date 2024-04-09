User Account
@extends('layouts.layout')
@section('title', 'Account')
@section('content')
<style>
    .container{
        width: 1400px;
        height: 320px;

    }
    
</style>
<div class="container mx-4">
    <div class="row">
        {{-- image User Account --}}
        <div class="col-md-6" style="width: 300px">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ url('assets/assets/for-cluster6/USER ICON.png') }}" alt="Account" class="light-logo" style="width:250px; margin:0px" />
                </div>
            </div>
        </div>
        <div class="col-md-6 py-4" style="padding: 10px">
            {{-- ส่วนของ Username --}}
            <div class="row justify-content-end py-2">
                <span class="border border-2 d-block text-left rounded" style="color:floralwhite; font-size:25px; padding: 10px;" value="name">CLUSER SIX</span>
            </div>
            {{-- ส่วนของ Email --}}
            <div class="row justify-content-end py-4">
                <span class="border border-2 d-block text-left rounded" style="color:floralwhite; font-size:25px; padding: 10px;" value="email">Admin123@gmail.com</span>
            </div>
        </div>
    </div>
</div>

@endsection
@extends('layouts.layout')
@section('title',"API Documentation & Design Tools")
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> --}}
            
            <div class="border border-#A19D9D border-3 d-flex align-items-center justify-content-left px-3" 
                style="height: 90px; font-size:30px; color:white;">Workspace
                <div class="ms auto">
                <i class="fas fa-edit mr-2"></i>
                <i class="fas fa-trash-alt mr-2"></i>
            </div>
            </div>
            
            
{{--            <div class="card">
                <div class="card-header">{{ __('Workspace') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> 
            </div> --}}

        {{-- </div>
    </div>
</div> --}}
@endsection

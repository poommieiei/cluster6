@extends('layouts.layout')
@section('title', 'API Documentation & Design Tools')
@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> --}}

    <div class="border border-#A19D9D border-3 d-flex align-items-center justify-content-left px-3"
        style="height: 90px; font-size:30px; color:white;">Workspace
        <div class="ms-auto">
            <i class="bi bi-pencil-square me-3"></i>
            <i class="bi bi-trash"></i>
        </div>
    </div>
    
    <!-- ปุ่ม Create -->
    <div class="fixed-bottom d-flex justify-content-end mb-3">
        <a href="#" id="openModal" class="btn btn-primary btn-lg"
            style="margin-right: 20px; background-color: #268EB0; color: #ffffff; width: 130px;">{{ __('Create') }}</a>
    </div>
    <!-- Modal -->
    <div class="modal" id="myModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Workspace</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById('openModal');

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            var myModal = new bootstrap.Modal(modal);
            myModal.show();
        }
    </script>

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
            </div>
        </div>
    </div>
</div> --}}
@endsection

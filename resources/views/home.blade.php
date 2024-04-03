@extends('layouts.layout')
@section('title', 'API Documentation & Design Tools')
@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> --}}

   {{-- Workspace edit --}}
    <div class="border border-#A19D9D border-3 d-flex align-items-center justify-content-left px-3 mt-3 mb-4 ms-5 me-5"
        style="height: 80px; font-size:20px; color:white;">Workspace
        <div class="ms-auto">
            <a href="#" class="text-decoration-none text-white me-3">
                <i class="bi bi-pencil-square" onclick="openModal()"></i>
            </a>
            <a href="#" class="text-decoration-none text-white">
                <i class="bi bi-trash"></i>
            </a>
        </div>
    </div>

<!--Rename workspace-->
<div class="modal" id="rename" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #136885; color: #ffffff;">
            <div class="modal-header" style="background-color: #073B4C; color: #ffffff;">
                <b class="logo-icon me-2" style="display: block; margin-bottom: 5px;">
                    <img src="{{ url('assets/assets/for-cluster6/LOGO API.png') }}" alt="homepage" class="light-logo"
                        width="20" style="display: block;" />
                </b>
                <h5 class="modal-title">Rename Workspace</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- กรอกชื่อ Workspace -->
                <div class="mb-3">
                    <label for="workspaceName" class="form-label">New Workspace name</label>
                    <input type="text" class="form-control" id="rename" placeholder="Enter workspace name"
                        style="background-color: #0C4F65; color: #ffffff;">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="createWorkspaceBtn"
                    style="background-color: #06D6A0; color: #000000;">Create</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    style="background-color: #808080; color: #ffffff;">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script>
    function openModal() {
        // Get the modal element by its ID
        var modal = document.getElementById('rename');
        // Show the modal
        modal.style.display = 'block';
    }
</script>

    <!-- ปุ่ม Create -->
    <div class="fixed-bottom d-flex justify-content-end mb-3">
        <a href="#" id="openModal" class="btn btn-primary btn-lg"
            style="margin-right: 20px; background-color: #268EB0; color: #ffffff; width: 130px;">{{ __('Create') }}</a>
    </div>
    <!-- Modal สร้าง Workspace -->
    <div class="modal" id="myModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #136885; color: #ffffff;">
                <div class="modal-header" style="background-color: #073B4C; color: #ffffff;">
                    <b class="logo-icon me-2" style="display: block; margin-bottom: 5px;">
                        <img src="{{ url('assets/assets/for-cluster6/LOGO API.png') }}" alt="homepage" class="light-logo"
                            width="20" style="display: block;" />
                    </b>
                    <h5 class="modal-title">New Workspace</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- กรอกชื่อ Workspace -->
                    <div class="mb-3">
                        <label for="workspaceName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="workspaceName" placeholder="Enter workspace name"
                            style="background-color: #0C4F65; color: #ffffff;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="createWorkspaceBtn"
                        style="background-color: #06D6A0; color: #000000;">Create</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        style="background-color: #808080; color: #ffffff;">Cancel</button>
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
        // Get the create button inside the modal
        var createBtn = document.getElementById('createWorkspaceBtn');
        // When the user clicks the button, open the modal
        btn.onclick = function() {
            var myModal = new bootstrap.Modal(modal);
            myModal.show();
        }
        // When the user clicks the create button, handle the creation logic
        createBtn.onclick = function() {
            var workspaceName = document.getElementById('workspaceName').value;
            alert('Workspace created successfully! Workspace Name: ' + workspaceName);
            closeModal();
        }
        // Function to close the modal
        function closeModal() {
            var myModal = new bootstrap.Modal(modal);
            myModal.hide();
        }
    </script>
    <!-- CSS -->
    <style>
        #workspaceName::placeholder {
            color: #f5f5f5; /** สี placeholder ของ Modal Create Workspace **/
        }
    </style>

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

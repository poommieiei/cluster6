@extends('layouts.layout')
@section('title', 'API Documentation & Design Tools')
@section('content')

    {{-- Workspace --}}
    @foreach ($workspaces as $workspace)
        <div class="border border-#A19D9D border-3 d-flex align-items-center justify-content-left px-3 mt-3 mb-4 ms-5 me-5"
            style="height: 80px; font-size:20px; color:white;">{{ $workspace->workspace_name}}
            <div class="ms-auto">
                {{-- Edit --}}
                <a href="#" class="text-decoration-none text-white me-3" onclick="openRenameModal()">
                    <i class="bi bi-pencil-square"></i>
                </a>
                {{-- Delete --}}
                <a href="#" class="text-decoration-none text-white" onclick="openDeleteModal()">
                    <i class="bi bi-trash"></i>
                </a>
            </div>
        </div>
    @endforeach

    {{-- Delete workspace --}}
    <div class="modal" id="DeleteModal" tabindex="-1">
        <form id="deleteForm" action="/delete" method="POST">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color: #136885; color: #ffffff;">
                    <div class="modal-header" style="background-color: #073B4C; color: #ffffff; border-color:#136885;">
                        <b class="logo-icon me-2" style="display: block; margin-bottom: 5px;">
                            <img src="{{ url('assets/assets/for-cluster6/LOGO API.png') }}" alt="homepage"
                                class="light-logo" width="20" style="display: block;" />
                        </b>
                        <h5 class="modal-title">Delete Workspace</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Are you sure you want to delete ? -->
                        <div class="mb-3">
                            <label for="areyousure" class="form-label">Are you sure you want to delete ?</label>
                            <span class="form-control" id="areyousure" name="areyousure" value= "Workspace 1"
                                style="background-color: #0C4F65; color:#ffffff; border-color:#ffffff">Workspace 1</span>
                        </div>
                    </div>
                    <div class="modal-footer" style="border-color:#136885;">
                        <!-- button delete-->
                        <button type="button" class="btn" id="submitDeleteWorkspaceBtn"
                            style="background-color: #EF476F; color: #ffffff;">Delete</button>
                        <!-- Use data-bs-dismiss="modal" to close the modal -->
                        <button type="button" class="btn" data-bs-dismiss="modal"
                            style="background-color: #808080; color: #ffffff;">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    {{-- ----------------------------------------------------------------------------------------------------------------------- --}}
    <!--Rename workspace-->
    <div class="modal" id="RenameModal" tabindex="-1">
        <form id="renameForm" action="/rename" method="POST"> <!--Route /rename-->
            <div class="modal-dialog">
                <div class="modal-content" style="background-color: #136885; color: #ffffff;">
                    <div class="modal-header" style="background-color: #073B4C; color: #ffffff; border-color:#136885;">
                        <b class="logo-icon me-2" style="display: block; margin-bottom: 5px;">
                            <img src="{{ url('assets/assets/for-cluster6/LOGO API.png') }}" alt="homepage"
                                class="light-logo" width="20" style="display: block;" />
                        </b>
                        <h5 class="modal-title">Rename Workspace</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Enter the new workspace name -->
                        <div class="mb-3">
                            <label for="workspaceName" class="form-label">New Workspace name</label>
                            <input type="text" class="form-control" id="workspaceName" name="workspaceName"
                                placeholder="Enter workspace name" style="background-color: #0C4F65; color:#ffffff;">
                        </div>
                    </div>
                    <div class="modal-footer" style="border-color:#136885;">
                        <!-- Change the input type to button -->
                        <button type="button" class="btn" id="submitWorkspaceBtn"
                            style="background-color: #06D6A0; color: #000000;">Reset</button>
                        <!-- Use data-bs-dismiss="modal" to close the modal -->
                        <button type="button" class="btn" data-bs-dismiss="modal"
                            style="background-color: #808080; color: #ffffff;">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <!-- ปุ่ม Create -->
    <div class="fixed-bottom d-flex justify-content-end mb-3">
        <a href="#" id="create" class="btn btn-lg"
            style="margin-right: 20px; background-color: #268EB0; color: #ffffff; width: 130px;">{{ __('Create') }}</a>
    </div>
    <!-- Modal Create Workspace -->
    <div class="modal" id="createWorkspaceModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #136885; color: #ffffff;">
                <div class="modal-header" style="background-color: #073B4C; color: #ffffff; border-color:#136885;">
                    <b class="logo-icon me-2" style="display: block; margin-bottom: 5px;">
                        <img src="{{ url('assets/assets/for-cluster6/LOGO API.png') }}" alt="homepage" class="light-logo"
                            width="20" style="display: block;" />
                    </b>
                    <h5 class="modal-title">New Workspace</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="/insertWrokspace/ {{ Auth::user()->id}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <!-- กรอกชื่อ Workspace -->
                        <div class="mb-3">
                            <label for="workspaceName" class="form-label">Name</label>
                            <input type="text" name="workspace" class="form-control" id="workspaceName"
                                placeholder="Enter workspace name" style="background-color: #0C4F65; color: #ffffff;">
                        </div>
                    </div>
                    <div class="modal-footer" style="border-color:#136885;">
                        <button type="submit" class="btn" id="createWorkspaceBtn"
                            style="background-color: #06D6A0; color: #000000;">Create</button>
                        <button type="button" class="btn" data-bs-dismiss="modal"
                            style="background-color: #808080; color: #ffffff;">Cancel</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        document.getElementById('submitWorkspaceBtn').addEventListener('click', function() {
            // Perform form submission here
            document.getElementById('renameForm').submit();
        });

        // Function to show the modal
        function openRenameModal() {
            var modal = new bootstrap.Modal(document.getElementById('RenameModal'));
            modal.show();
        }

        // Function to close the modal
        function closeRenameModal() {
            var modal = new bootstrap.Modal(document.getElementById('RenameModal'));
            modal.hide();
        }
    </script>
    <script>
        document.getElementById('submitDeleteWorkspaceBtn').addEventListener('click', function() {
            // Perform form submission here
            document.getElementById('deleteForm').submit();
        });

        // Function to show the modal
        function openDeleteModal() {
            var modal = new bootstrap.Modal(document.getElementById('DeleteModal'));
            modal.show();
        }

        // Function to close the modal
        function closeDeleteModal() {
            var modal = new bootstrap.Modal(document.getElementById('DeleteModal'));
            modal.hide();
        }
    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Get the modal
        var modal = document.getElementById('createWorkspaceModal');
        // Get the button that opens the modal
        var btn = document.getElementById('create');
        // Get the create button inside the modal
        var createBtn = document.getElementById('createWorkspaceBtn');
        // When the user clicks the button, open the modal
        btn.onclick = function() {
            var createWorkspaceModal = new bootstrap.Modal(modal);
            createWorkspaceModal.show();
        }
        // When the user clicks the create button, handle the creation logic
        createBtn.onclick = function() {
            var workspaceName = document.getElementById('workspaceName').value;

            closeModal();
        }
        // Function to close the modal
        function closeModal() {
            var createWorkspaceModal = new bootstrap.Modal(modal);
            createWorkspaceModal.hide();
        }
    </script>
    <!-- CSS -->
    <style>
        #workspaceName::placeholder {
            color: #e0e0e0;
            /** สี placeholder ของ Modal Create Workspace **/
        }
    </style>

@endsection

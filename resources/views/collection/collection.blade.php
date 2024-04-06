@extends('layouts.layout')
@section('content')
    <div class="border border-white d-flex border-2 d-flex align-items-center justify-content-left px-3 mt-3 mb-4 ms-5 me-5"
        style="height: 80px; font-size:20px; color:white;">
        Collection
        <div class="ms-auto">
            <a href="#" class="text-decoration-none text-white me-3">
                <i class="bi bi-pencil-square"></i>
            </a>
            <a href="#" class="text-decoration-none text-white">
                <i class="bi bi-trash"></i>
            </a>
        </div>
    </div>
    <div class="fixed-bottom d-flex justify-content-end mb-3 me-3">
        <a href="#" id="import" class="btn btn-lg btn-icon"
            style="margin-right: 20px; background-color:#268EB0; color:#ffffff; width: 130px;">
            <i class="fas fa-download mr-2 me-3"></i>
            Import
        </a>
    </div>

    <!-- Rename Collection -->
    <div class="modal" id="reCollecModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #136885; color: #ffffff;">
                <div class="modal-header" style="background-color: #073B4C; color: #ffffff; border-color:#136885;">
                    <b class="logo-icon" style="display: block; margin-bottom: 5px;">
                        <img src="{{ url('assets/assets/for-cluster6/LOGO API.png') }}" alt="homepage" class="light-logo"
                            width="20" style="display: block;" />
                    </b>
                    <h5 class="modal-title">Rename</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- กรอกชื่อ Collection -->
                    <div class="mb-3">
                        <label for="collectionName" class="form-label">New collection name</label>
                        <input type="text" class="form-control" id="collectionName" value="myCollection"
                            style="background-color: #0C4F65; color: #ffffff;">
                    </div>
                </div>
                <div class="modal-footer" style="border-color:#136885;">
                    <button type="button" class="btn" id="resetBtn"
                        style="background-color: #06D6A0; color: #000000;">Reset</button>
                    <button type="button" class="btn" data-bs-dismiss="modal"
                        style="background-color: #808080; color: #ffffff;">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        // เลือกไอคอน bi-pencil-square
        var pencilIcon = document.querySelector('.bi.bi-pencil-square');

        // เพิ่มการฟังก์ชันเมื่อคลิกที่ไอคอน
        pencilIcon.addEventListener('click', function() {
            // เปิด Modal โดยใช้ Bootstrap JavaScript
            var reCollec = new bootstrap.Modal(document.getElementById('reCollecModal'));
            reCollec.show();
        });

        // เลือกปุ่มปิด (สำหรับปิดด้วยการคลิกภายนอก Modal)
        var modal = document.getElementById('reCollecModal');
        modal.addEventListener('click', function(event) {
            if (event.target === modal) {
                // ปิด Modal โดยใช้ Bootstrap JavaScript
                var reCollec = new bootstrap.Modal(document.getElementById('reCollecModal'));
                reCollec.hide();
            }
        });
    </script>

    <!-- Delete Collection -->
    <div class="modal" id="delCollecModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #136885; color: #ffffff;">
                <div class="modal-header" style="background-color: #073B4C; color: #ffffff; border-color:#136885;">
                    <b class="logo-icon" style="display: block; margin-bottom: 7px;">
                        <img src="{{ url('assets/assets/for-cluster6/LOGO API.png') }}" alt="homepage" class="light-logo"
                            width="20" style="display: block;" />
                    </b>
                    <h5 class="modal-title">Delete Collection</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- ชื่อ Collection -->
                    <div class="mb-3">
                        <label for="collectionName" class="form-label">Are you sure you want to delete ?</label>
                        <span id="collectionName" class="form-control"
                            style="background-color: #0C4F65; color: #ffffff;">myCollection</span>
                    </div>
                </div>
                <div class="modal-footer" style="border-color:#136885;">
                    <button type="button" class="btn" id="delCollecBtn"
                        style="background-color: #EF476F; color: #ffffff;">Delete</button>
                    <button type="button" class="btn" data-bs-dismiss="modal"
                        style="background-color: #808080; color: #ffffff;">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        // เลือกไอคอน
        var trashIcon = document.querySelector('.bi.bi-trash');

        // เพิ่มการฟังก์ชันเมื่อคลิกที่ไอคอน
        trashIcon.addEventListener('click', function() {
            // เปิด Modal โดยใช้ Bootstrap JavaScript
            var delCollec = new bootstrap.Modal(document.getElementById('delCollecModal'));
            delCollec.show();
        });

        // เลือกปุ่มปิด (สำหรับปิดด้วยการคลิกภายนอก Modal)
        var modal = document.getElementById('delCollecModal');
        modal.addEventListener('click', function(event) {
            if (event.target === modal) {
                // ปิด Modal โดยใช้ Bootstrap JavaScript
                var delCollec = new bootstrap.Modal(document.getElementById('delCollecModal'));
                delCollec.hide();
            }
        });
    </script>
    <style>
        .btn-icon {
            display: inline-flex;
            align-items: center;
        }
    </style>
@endsection

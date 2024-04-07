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
        <form action="#" method="post" enctype="multipart/form-data">
            <!-- ปุ่ม Import -->
            <button type="submit" class="btn btn-lg" style="margin-right:20px; background-color:#20C997; color:#ffffff; width: 160px;">
                <i class="fas fa-download " style="margin-right: 10px;"></i> Import
            </button>
            <!-- ปุ่ม Choose file -->
            <label for="fileUpload" class="btn btn-lg mb-0" style="margin-right:20px; background-color:#268EB0; color:#ffffff; width: 160px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-filetype-json" viewBox="0 0 16 16" style="margin-right: 5px;">
                    <path fill-rule="evenodd" d="M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM4.151 15.29a1.2 1.2 0 0 1-.111-.449h.764a.58.58 0 0 0 .255.384q.105.073.25.114.142.041.319.041.245 0 .413-.07a.56.56 0 0 0 .255-.193.5.5 0 0 0 .084-.29.39.39 0 0 0-.152-.326q-.152-.12-.463-.193l-.618-.143a1.7 1.7 0 0 1-.539-.214 1 1 0 0 1-.352-.367 1.1 1.1 0 0 1-.123-.524q0-.366.19-.639.192-.272.528-.422.337-.15.777-.149.456 0 .779.152.326.153.5.41.18.255.2.566h-.75a.56.56 0 0 0-.12-.258.6.6 0 0 0-.246-.181.9.9 0 0 0-.37-.068q-.324 0-.512.152a.47.47 0 0 0-.185.384q0 .18.144.3a1 1 0 0 0 .404.175l.621.143q.326.075.566.211a1 1 0 0 1 .375.358q.135.222.135.56 0 .37-.188.656a1.2 1.2 0 0 1-.539.439q-.351.158-.858.158-.381 0-.665-.09a1.4 1.4 0 0 1-.478-.252 1.1 1.1 0 0 1-.29-.375m-3.104-.033a1.3 1.3 0 0 1-.082-.466h.764a.6.6 0 0 0 .074.27.5.5 0 0 0 .454.246q.285 0 .422-.164.137-.165.137-.466v-2.745h.791v2.725q0 .66-.357 1.005-.355.345-.985.345a1.6 1.6 0 0 1-.568-.094 1.15 1.15 0 0 1-.407-.266 1.1 1.1 0 0 1-.243-.39m9.091-1.585v.522q0 .384-.117.641a.86.86 0 0 1-.322.387.9.9 0 0 1-.47.126.9.9 0 0 1-.47-.126.87.87 0 0 1-.32-.387 1.55 1.55 0 0 1-.117-.641v-.522q0-.386.117-.641a.87.87 0 0 1 .32-.387.87.87 0 0 1 .47-.129q.265 0 .47.129a.86.86 0 0 1 .322.387q.117.255.117.641m.803.519v-.513q0-.565-.205-.973a1.46 1.46 0 0 0-.59-.63q-.38-.22-.916-.22-.534 0-.92.22a1.44 1.44 0 0 0-.589.628q-.205.407-.205.975v.513q0 .562.205.973.205.407.589.626.386.217.92.217.536 0 .917-.217.384-.22.589-.626.204-.41.205-.973m1.29-.935v2.675h-.746v-3.999h.662l1.752 2.66h.032v-2.66h.75v4h-.656l-1.761-2.676z"/>
                </svg> Choose file
            </label>
            <input class="form-control-file" type="file" id="fileUpload" name="file" style="display: none;">
        </form>
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

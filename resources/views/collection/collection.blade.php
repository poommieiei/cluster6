@extends('collection.layoutCollection')
@section('content')

<div class="border border-white d-flex border-2 d-flex align-items-center justify-content-left px-3 mt-3 mb-4 ms-5 me-5" style="height: 80px; font-size:20px; color:white;">
    Collection
    <div class="ms-auto">
        <i class="bi bi-pencil-square me-3"></i>
        <i class="bi bi-trash"></i>
    </div>
</div>
<div class="border border-white d-flex border-2 d-flex align-items-center justify-content-left px-3 mt-3 mb-4 ms-5 me-5" style="height: 80px; font-size:20px; color:white;">
    Collection
    <div class="ms-auto">
        <i class="bi bi-pencil-square me-3"></i>
        <i class="bi bi-trash"></i>
    </div>
</div>
<div class="border border-white d-flex border-2 d-flex align-items-center justify-content-left px-3 mt-3 mb-4 ms-5 me-5" style="height: 80px; font-size:20px; color:white;">
    Collection
    <div class="ms-auto">
        <i class="bi bi-pencil-square me-3"></i>
        <i class="bi bi-trash"></i>
    </div>
</div>
<div>
    <button type="button" class="btn btn-primary" style="position: fixed; bottom: 10px; right: 10px;">
        <i class="fas fa-download"></i> Import
      </button>
</div>

<div class="modal" id="myModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #136885; color: #ffffff;">
            <div class="modal-header" style="background-color: #073B4C; color: #ffffff;">
                <b class="logo-icon" style="display: block; margin-bottom: 7px;">
                    <img src="{{ url('assets/assets/for-cluster6/LOGO API.png') }}" alt="homepage" class="light-logo"
                        width="20" style="display: block;" />
                </b>
                <h5 class="modal-title">Rename</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- กรอกชื่อ Workspace -->
                <div class="mb-3">
                    <label for="workspaceName" class="form-label">New collection name</label>
                    <input type="text" class="form-control" id="workspaceName"
                        style="background-color: #0C4F65; color: #ffffff;">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="createWorkspaceBtn"
                    style="background-color: #06D6A0; color: #000000;">Reset</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
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
        // หา Modal
        var modal = document.getElementById('myModal');

        // แสดง Modal
        modal.style.display = 'block';
    });
        // เลือกปุ่มปิด
        var closeModalButton = document.querySelector('.modal .close');

        // เพิ่มการฟังก์ชันเมื่อคลิกที่ปุ่มปิด
        closeModalButton.addEventListener('click', function() {
        // หา Modal
        var modal = document.getElementById('myModal');

        // ปิด Modal
        modal.style.display = 'none';
    });
        // เลือกปุ่มปิด (สำหรับปิดด้วยการคลิกภายนอก Modal)
        var modal = document.getElementById('myModal');
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
    </script>
</body>
</html>

@endsection

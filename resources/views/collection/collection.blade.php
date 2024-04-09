@extends('layouts.layout')
@section('title', 'API Documentation & Design Tools')
@section('content')
    @foreach ($collections as $collection)
        <div class="border border-#A19D9D border-3 d-flex align-items-center justify-content-left px-3 mt-3 mb-4 ms-5 me-5"
            style="height: 80px; font-size:20px; color:white;">
            <a href="#" class="text-decoration-none text-white">
                {{ $collection->collection_name}}
            </a>
            <div class="ms-auto">
                <a style="cursor: pointer" class="text-decoration-none text-white me-3"
                    onclick="openRenameModal('{{ $collection->id }}', '{{ $collection->collection_name }}')">
                    <i class="bi bi-pencil-square"></i>
                </a>
                <a style="cursor: pointer" class="text-decoration-none text-white"
                    onclick="openDelCollecModal('{{ $collection->id }}')">
                    <i class="bi bi-trash"></i>
                </a>
            </div>
        </div>
    @endforeach

    <div class="fixed-bottom d-flex justify-content-end mb-3 me-3">
        <form action="/importcollection/{{$id}}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- ปุ่ม Import -->
            <button type="submit" class="btn btn-lg"
                style="margin-right:20px; background-color:#20C997; color:#ffffff; width: 160px;">
                <i class="fas fa-download " style="margin-right: 10px;"></i> Import
            </button>
            <!-- ปุ่ม Choose file -->
            <label for="json_file" class="btn btn-lg mb-0"
                style="margin-right:20px; background-color:#268EB0; color:#ffffff; width: 160px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor"
                    class="bi bi-filetype-json" viewBox="0 0 16 16" style="margin-right: 5px;">
                    <path fill-rule="evenodd"
                        d="M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM4.151 15.29a1.2 1.2 0 0 1-.111-.449h.764a.58.58 0 0 0 .255.384q.105.073.25.114.142.041.319.041.245 0 .413-.07a.56.56 0 0 0 .255-.193.5.5 0 0 0 .084-.29.39.39 0 0 0-.152-.326q-.152-.12-.463-.193l-.618-.143a1.7 1.7 0 0 1-.539-.214 1 1 0 0 1-.352-.367 1.1 1.1 0 0 1-.123-.524q0-.366.19-.639.192-.272.528-.422.337-.15.777-.149.456 0 .779.152.326.153.5.41.18.255.2.566h-.75a.56.56 0 0 0-.12-.258.6.6 0 0 0-.246-.181.9.9 0 0 0-.37-.068q-.324 0-.512.152a.47.47 0 0 0-.185.384q0 .18.144.3a1 1 0 0 0 .404.175l.621.143q.326.075.566.211a1 1 0 0 1 .375.358q.135.222.135.56 0 .37-.188.656a1.2 1.2 0 0 1-.539.439q-.351.158-.858.158-.381 0-.665-.09a1.4 1.4 0 0 1-.478-.252 1.1 1.1 0 0 1-.29-.375m-3.104-.033a1.3 1.3 0 0 1-.082-.466h.764a.6.6 0 0 0 .074.27.5.5 0 0 0 .454.246q.285 0 .422-.164.137-.165.137-.466v-2.745h.791v2.725q0 .66-.357 1.005-.355.345-.985.345a1.6 1.6 0 0 1-.568-.094 1.15 1.15 0 0 1-.407-.266 1.1 1.1 0 0 1-.243-.39m9.091-1.585v.522q0 .384-.117.641a.86.86 0 0 1-.322.387.9.9 0 0 1-.47.126.9.9 0 0 1-.47-.126.87.87 0 0 1-.32-.387 1.55 1.55 0 0 1-.117-.641v-.522q0-.386.117-.641a.87.87 0 0 1 .32-.387.87.87 0 0 1 .47-.129q.265 0 .47.129a.86.86 0 0 1 .322.387q.117.255.117.641m.803.519v-.513q0-.565-.205-.973a1.46 1.46 0 0 0-.59-.63q-.38-.22-.916-.22-.534 0-.92.22a1.44 1.44 0 0 0-.589.628q-.205.407-.205.975v.513q0 .562.205.973.205.407.589.626.386.217.92.217.536 0 .917-.217.384-.22.589-.626.204-.41.205-.973m1.29-.935v2.675h-.746v-3.999h.662l1.752 2.66h.032v-2.66h.75v4h-.656l-1.761-2.676z" />
                </svg> Choose file
            </label>
            <input class="form-control-file" type="file" id="json_file" name="json_file" style="display: none;"
                onchange="showFileName()">
        </form>
        {{-- แสดงชื่อไฟล์ที่เลือก --}}
    <span class="text" style="position:fixed; bottom: 10%; right:2.5%; color:#ffffff"></span>
    <script>
        document.getElementById('json_file').addEventListener('change', function() {
            var fileName = this.files[0].name;
            document.querySelector('.text').innerHTML = fileName;
        });
    </script>
        @if (isset($jsonData))
                {{-- {{ json_encode($jsonData) }} --}}
                {{-- <h2>JSON Data</h2>
                <pre>{{ json_encode($jsonData, JSON_PRETTY_PRINT) }}</pre> --}}
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Method</th>
                            <th>URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jsonData['item'] as $item)
                            <tr>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['request']['method'] }}</td>
                                {{-- <td>{{ $item['variable']['key'] }}</td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <table>
                    <thead>
                        <tr>
                            <th>key</th>
                            <th>value</th>
                            <th>type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jsonData['variable'] as $item)
                            <tr>
                                <td>{{ $item['key'] }}</td>
                                <td>{{ $item['value'] }}</td>
                                <td>{{ $item['type'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            @endif
    </div>
     {{-- แสดงชื่อไฟล์ที่เลือก --}}
     <span class="text" style="position:fixed; bottom: 10%; right:2.5%; color:#ffffff"></span>
     <script>
         document.getElementById('fileUpload').addEventListener('change', function() {
             var fileName = this.files[0].name;
             document.querySelector('.text').innerHTML = fileName;
         });
     </script>
    <!-- Rename Collection -->
    <div class="modal" id="RenameModal" tabindex="-1">
        <form id="renameForm" action="" method="POST">
            @csrf
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
                            <input type="text" class="form-control" id="collectionName" name="collectionName"
                            value="" style="background-color: #0C4F65; color: #ffffff;">
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
        </form>
    </div>
    <script>
        document.getElementById('resetBtn').addEventListener('click', function() {

            document.getElementById('renameForm').submit();
        });
        var RouteURL = '/renamecollection/';
        var Collection;

        function openRenameModal(collectionId, collectionName) {
            var URL = RouteURL + collectionId.trim();
            Collection = collectionName;
            var name = collectionName.trim();;
            console.log(URL);
            console.log(name);
            document.getElementById('renameForm').action = URL;

            document.getElementById('collectionName').value = name;

            var modal = new bootstrap.Modal(document.getElementById('RenameModal'));
            modal.show();
        }

        function closeRenameModal() {
            var modal = new bootstrap.Modal(document.getElementById('RenameModal'));
            modal.hide();
        }
    </script>

    <!-- Delete Collection -->
    <div class="modal" id="delCollecModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #136885; color: #ffffff;">
                <div class="modal-header" style="background-color: #073B4C; color: #ffffff; border-color:#136885;">
                    <b class="logo-icon me-2" style="display: block; margin-bottom: 7px;">
                        <img src="{{ url('assets/assets/for-cluster6/LOGO API.png') }}" alt="homepage" class="light-logo"
                            width="20" style="display: block;" />
                    </b>
                    <h5 class="modal-title">Delete Collection</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body" style="height: 20px">
                    <!-- Are you sure you want to delete ? -->
                    <div class="mb-3">
                        <label for="areyousure" class="form-label">Are you sure you want to delete ?</label>
                    </div>
                </div>
                <div class="modal-footer" style="border-color:#136885;">
                    <a href="" type="button" class="btn" id="delCollecBtn"
                        style="background-color: #EF476F; color: #ffffff;">Delete</a>
                    <button type="button" class="btn" data-bs-dismiss="modal"
                        style="background-color: #808080; color: #ffffff;">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('delCollecBtn').addEventListener('click', function() {
            // เรียกใช้ฟังก์ชันลบ โดยการโดยรับตัวแปรไอดีของคอลเลคชันที่ต้องการลบ
        });
        var URL = '/deletecollection/';

        // เปิด Modal สำหรับการลบคอลเลคชัน
        function openDelCollecModal(collectionId,workspaceId) {
            var deleteURL = URL += collectionId;
            console.log(deleteURL);

            document.getElementById('delCollecBtn').href = deleteURL;
            var modal = new bootstrap.Modal(document.getElementById('delCollecModal'));

            modal.show();
        }
    </script>

@endsection

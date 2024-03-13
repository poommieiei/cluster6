<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="card">
        @if (Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif
        <div class="card-header">Upload JSON File</div>
        <div class="card-body">

            <form action="importjson" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="json_file">Select JSON File</label>
                    <input type="file" class="form-control-file" id="json_file" name="json_file">
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
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
    </div>
    {{--<script>
        if(!data){return}
        let test =  {{ json_encode(data)}};
        let data = JSON.parse(test);
        console.log(test);
    </script> --}}
</body>

</html>

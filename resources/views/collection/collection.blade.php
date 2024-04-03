@extends('layouts.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title</title>
    <!-- Add Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="border border-dark p-4 d-flex">
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
</body>
</html>

@endsection

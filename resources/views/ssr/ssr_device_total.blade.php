<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ssr-device-total</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2 class="mb-3">device 테이블 (SSR)</h2>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>id_device</th>
                <th>name_device</th>
                <th>type_device</th>
                <th>release_device</th>
                <th>manf_code_device</th>
            </tr>
        </thead>
        <tbody>
            @if (empty($deviceList))
                <tr>
                    <td colspan="5" class="text-center text-muted">데이터가 없습니다.</td>
                </tr>
            @else
                @foreach ($deviceList as $device)
                    <tr>
                        <td>{{ $device->id_device }}</td>
                        <td>{{ $device->name_device }}</td>
                        <td>{{ $device->type_device }}</td>
                        <td>{{ $device->release_device }}</td>
                        <td>{{ $device->manf_code_device }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ssr-member-total</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2 class="mb-3">member 테이블 (SSR)</h2>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>id_member</th>
                <th>name_member</th>
                <th>email_member</th>
                <th>phone_member</th>
                <th>join_date_member</th>
                <th>role_member</th>
            </tr>
        </thead>
        <tbody>
            @if (empty($memberList))
                <tr>
                    <td colspan="6" class="text-center text-muted">데이터가 없습니다.</td>
                </tr>
            @else
                @foreach ($memberList as $member)
                    <tr>
                        <td>{{ $member->id_member }}</td>
                        <td>{{ $member->name_member }}</td>
                        <td>{{ $member->email_member }}</td>
                        <td>{{ $member->phone_member }}</td>
                        <td>{{ $member->join_date_member }}</td>
                        <td>{{ $member->role_member }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

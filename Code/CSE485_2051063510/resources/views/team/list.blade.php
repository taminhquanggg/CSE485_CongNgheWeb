<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách đội bóng</title>
</head>
<body>
    <h1>Danh sách đội bóng</h1>

    @if (session()->has('status'))
    <p style="color: green;">{{ session()->get('status') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th style="border: 1px solid">Mã đội bóng</th>
                <th style="border: 1px solid">Tên đội bóng</th>
                <th style="border: 1px solid">Năm thành lập</th>
                <th style="border: 1px solid">Xem danh sách cầu thủ</th>
            </tr>
        </thead>
        <tbody>
            @forelse($teams as $team)
            <tr>
                <td style="border: 1px solid">{!! $team->team_id !!}</td>
                <td style="border: 1px solid">{!! $team->team_name !!}</td>
                <td style="border: 1px solid">{!! $team->founded_year !!}</td>
                <td style="border: 1px solid"><a href="/player/{!! $team->team_id !!}/show">Xem danh sách cầu thủ</a></td>
            </tr>
            @empty
            <tr>
                <td>Không có đội bóng nào</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
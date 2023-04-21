<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách cầu thủ</title>
</head>
<body>
    <a href="/team"><< Danh sách đội bóng</a>
    <br>

    <h1>Danh sách cầu thủ thuộc đội bóng {!! $team_name !!}</h1>

    @if (session()->has('status'))
    <p style="color: green;">{{ session()->get('status') }}</p>
    <br>
    @endif
    
    <a href="/player/{!! $team_id !!}/add">Thêm cầu thủ</a>
    <br><br>

    <table>
        <thead>
            <tr>
                <th style="border: 1px solid">Mã cầu thủ</th>
                <th style="border: 1px solid">Mã đội bóng</th>
                <th style="border: 1px solid">Tên đội bóng</th>
                <th style="border: 1px solid">Tên cầu thủ</th>
                <th style="border: 1px solid">Giới tính</th>
                <th style="border: 1px solid">Ngày sinh</th>
                <th style="border: 1px solid">Nơi sinh</th>
                <th style="border: 1px solid">Số áo</th>
                <th style="border: 1px solid">Xóa cầu thủ</th>
            </tr>
        </thead>
        <tbody>
            @forelse($players as $player)
            <tr>
                <td style="border: 1px solid">{!! $player->p_id !!}</td>
                <td style="border: 1px solid">{!! $player->team_id !!}</td>
                <td style="border: 1px solid">{!! $player->team->team_name !!}</td>
                <td style="border: 1px solid">{!! $player->p_fullname !!}</td>
                <td style="border: 1px solid">{!! $player->p_sex !!}</td>
                <td style="border: 1px solid">{!! $player->p_dob !!}</td>
                <td style="border: 1px solid">{!! $player->p_birthplace !!}</td>
                <td style="border: 1px solid">{!! $player->p_shirtnumber !!}</td>
                <th style="border: 1px solid"><a href="/player/{!! $player->p_id !!}/delete">Xóa cầu thủ</a></th>

            </tr>
            @empty
            <tr>
                <td>Không có cầu thủ nào</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
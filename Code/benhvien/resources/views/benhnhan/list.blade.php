<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách bệnh nhân</title>
</head>
<body>
<a href="/">Trang chủ</a>
    <h1>Danh sách bệnh nhân</h1>

    @if (session()->has('status'))
    <p style="color: green;">{{ session()->get('status') }}</p>
    @endif


    <a href="/benhnhan/add">Thêm bệnh nhân</a>
    <table>
        <thead>
            <tr>
                <th style="border: 1px solid">Mã bệnh nhân</th>
                <th style="border: 1px solid">Tên bệnh nhân</th>
                <th style="border: 1px solid">CCCD</th>
                <th style="border: 1px solid">Ngày sinh</th>
                <th style="border: 1px solid">Giới tính</th>
                <th style="border: 1px solid">Quê quán</th>
                <th style="border: 1px solid">Xem</th>
                <th style="border: 1px solid">Sửa</th>
                <th style="border: 1px solid">Xóa</th>
            </tr>
        </thead>
        <tbody>
            @forelse($benhnhans as $benhnhan)
            <tr>
                <td style="border: 1px solid">{!! $benhnhan->MaBN !!}</td>
                <td style="border: 1px solid">{!! $benhnhan->TenBN !!}</td>
                <td style="border: 1px solid">{!! $benhnhan->CCCD !!}</td>
                <td style="border: 1px solid">{!! $benhnhan->NgaySinh !!}</td>
                <td style="border: 1px solid">{!! $benhnhan->GioiTinh !!}</td>
                <td style="border: 1px solid">{!! $benhnhan->QueQuan !!}</td>
                <td style="border: 1px solid"><a href="/benhnhan/{!! $benhnhan->MaBN !!}/detail">Xem</a></td>
                <td style="border: 1px solid"><a href="/benhnhan/{!! $benhnhan->MaBN !!}/edit">Sửa</a></td>
                <td style="border: 1px solid"><a href="/benhnhan/{!! $benhnhan->MaBN !!}/delete">Xóa</a></td>
            </tr>
            @empty
            <tr>
                <td>Không có bệnh nhân nào</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
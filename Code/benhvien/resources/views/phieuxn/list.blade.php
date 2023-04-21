<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách phiếu xn</title>
</head>
<body>
<a href="/">Trang chủ</a>
    <h1>Danh sách phiếu xn</h1>

    @if (session()->has('status'))
    <p style="color: green;">{{ session()->get('status') }}</p>
    @endif

    <a href="/phieuxn/add">Thêm phiếu xn</a>
    <table>
        <thead>
            <tr>
                <th style="border: 1px solid">Mã phiếu</th>
                <th style="border: 1px solid">Mã BN</th>
                <th style="border: 1px solid">Tên BN</th>
                <th style="border: 1px solid">CCCD</th>
                <th style="border: 1px solid">Ngày sinh</th>
                <th style="border: 1px solid">Giới tính</th>
                <th style="border: 1px solid">Quê quán</th>
                <th style="border: 1px solid">Tên XN</th>
                <th style="border: 1px solid">Ngày XN</th>
                <th style="border: 1px solid">KQ XN</th>
                <th style="border: 1px solid">Chi phí</th>
                <th style="border: 1px solid">Xem</th>
                <th style="border: 1px solid">Sửa</th>
                <th style="border: 1px solid">Xóa</th>
            </tr>
        </thead>
        <tbody>
            @forelse($phieuxns as $phieuxn)
            <tr>
                <td style="border: 1px solid">{!! $phieuxn->MaPhieu !!}</td>

                <td style="border: 1px solid">{!! $phieuxn->MaBN !!}</td>
                <td style="border: 1px solid">{!! $phieuxn->BenhNhan->TenBN !!}</td>
                <td style="border: 1px solid">{!! $phieuxn->BenhNhan->CCCD !!}</td>
                <td style="border: 1px solid">{!! $phieuxn->BenhNhan->NgaySinh !!}</td>
                <td style="border: 1px solid">{!! $phieuxn->BenhNhan->GioiTinh !!}</td>
                <td style="border: 1px solid">{!! $phieuxn->BenhNhan->QueQuan !!}</td>

                <td style="border: 1px solid">{!! $phieuxn->TenXN !!}</td>
                <td style="border: 1px solid">{!! $phieuxn->NgayXN !!}</td>
                <td style="border: 1px solid">{!! $phieuxn->KetQuaXN !!}</td>
                <td style="border: 1px solid">{!! $phieuxn->ChiPhi !!}</td>
                <td style="border: 1px solid"><a href="/phieuxn/{!! $phieuxn->MaPhieu !!}/detail">Xem</a></td>
                <td style="border: 1px solid"><a href="/phieuxn/{!! $phieuxn->MaPhieu !!}/edit">Sửa</a></td>
                <td style="border: 1px solid"><a href="/phieuxn/{!! $phieuxn->MaPhieu !!}/delete">Xóa</a></td>
            </tr>
            @empty
            <tr>
                <td>Không có phiếu xn nào</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
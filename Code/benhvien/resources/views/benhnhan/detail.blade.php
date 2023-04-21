<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết bệnh nhân</title>
</head>
<body>
<a href="/">Trang chủ</a>
    <p>MaBN: {!! $benhnhan->MaBN !!}</p>
    <p>TenBN: {!! $benhnhan->TenBN !!}</p>
    <p>CCCD: {!! $benhnhan->CCCD !!}</p>
    <p>NgaySinh: {!! $benhnhan->NgaySinh !!}</p>
    <p>GioiTinh: {!! $benhnhan->GioiTinh !!}</p>
    <p>QueQuan: {!! $benhnhan->QueQuan !!}</p>
    <a href="/benhnhan"><< Quay về</a>
</body>
</html>
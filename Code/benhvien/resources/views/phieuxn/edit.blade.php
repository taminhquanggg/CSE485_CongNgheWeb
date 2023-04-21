<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm phiếu xn</title>
</head>
<body>
<a href="/">Trang chủ</a>
    <h1>THÊM PHIẾU XN</h1>

    <form action="" method="POST">
        <label for="txtMaPhieu">Mã phiếu</label>
        <input type="text" id="txtMaPhieu" name="txtMaPhieu" value="{!! $phieuxn->MaPhieu !!}" readonly>
        <br>
        
        <label for="txtMaBN">Mã BN</label>
        <select name="txtMaBN" id="txtMaBN" value="{!! $phieuxn->MaBN !!}">
            @foreach ($benhnhans as $benhnhan)
                <option value="{!! $benhnhan->MaBN !!}"
                @if($benhnhan->MaBN == $phieuxn->MaBN)
                selected
                @endif
                >
                    {!! $benhnhan->MaBN !!} | {!! $benhnhan->TenBN !!}
                </option>
            @endforeach
        </select>
        <br>

        @if ($errors->has('txtMaBN'))
        <p style = "color: red">Cần nhập mã BN</p>
        @endif

        <label for="txtTenXN">Tên XN</label>
        <input type="text" id="txtTenXN" name="txtTenXN" value="{!! $phieuxn->TenXN !!}">
        <br>
        @if ($errors->has('txtTenXN'))
        <p style = "color: red">Cần nhập tên XN</p>
        @endif

        <label for="txtNgayXN">Ngày XN</label>
        <input type="date" id="txtNgayXN" name="txtNgayXN" value="{!! $phieuxn->NgayXN !!}">
        <br>
        @if ($errors->has('txtNgayXN'))
        <p style = "color: red">Cần nhập ngày XN</p>
        @endif

        <label for="txtKetQuaXN">Kết quả XN</label>
        <input type="text" id="txtKetQuaXN" name="txtKetQuaXN" value="{!! $phieuxn->KetQuaXN !!}">
        <br>
        @if ($errors->has('txtKetQuaXN'))
        <p style = "color: red">Cần nhập kết quả XN</p>
        @endif

        <label for="txtChiPhi">Chi phí</label>
        <input type="text" id="txtChiPhi" name="txtChiPhi" value="{!! $phieuxn->ChiPhi !!}">
        <br>
        @if ($errors->has('txtChiPhi'))
        <p style = "color: red">Cần nhập chi phí</p>
        @endif
        
        @csrf
        <button>Sửa</button>
    </form>
</body>
</html>
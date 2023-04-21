<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm bệnh nhân</title>
</head>
<body>
<a href="/">Trang chủ</a>
    <h1>THÊM BỆNH NHÂN</h1>

    <form action="" method="POST">
        <label for="txtMaBN">Mã bệnh nhân</label>
        <input type="text" id="txtMaBN" name="txtMaBN"  readonly>
        <br>
        
        <label for="TenBN">Tên bệnh nhân</label>
        <input type="text" id="TenBN" name="TenBN">
        <br>
        @if ($errors->has('TenBN'))
        <p style = "color: red">Tên bệnh nhân không được để trống và phải duy nhất</p>
        @endif

        <label for="txtCCCD">CCCD</label>
        <input type="text" id="txtCCCD" name="txtCCCD">
        <br>
        @if ($errors->has('txtCCCD'))
        <p style = "color: red">Cần nhập CCCD</p>
        @endif

        <label for="txtNgaySinh">Ngày sinh</label>
        <input type="date" id="txtNgaySinh" name="txtNgaySinh">
        <br>
        @if ($errors->has('txtNgaySinh'))
        <p style = "color: red">Cần nhập Ngày sinh</p>
        @endif

        <label for="txtGioiTinh">Giới tính</label>
        <select name="txtGioiTinh" id="txtGioiTinh">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select>
        <br>
        @if ($errors->has('txtGioiTinh'))
        <p style = "color: red">Cần nhập Giới tính</p>
        @endif

        <label for="txtQueQuan">Quê quán</label>
        <input type="text" id="txtQueQuan" name="txtQueQuan">
        <br>
        @if ($errors->has('txtQueQuan'))
        <p style = "color: red">Cần nhập Quê quán</p>
        @endif
        
        @csrf
        <button>Thêm</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm bệnh nhân</title>
</head>
<body>

    <form method="POST" action="">

        <h1>Nhập thông tin bệnh nhân</h1>
        <label for="txtID">ID</label>
        <input type="text" id="txtID" name="txtID" readonly>
        <br>

        <label for="txtTenBN">Tên bệnh nhân</label>
        <input type="text" id="txtTenBN" name="txtTenBN" >
        @if ($errors->has('txtTenBN'))
            <p>Cần nhập tên bệnh nhân</p>
        @endif
        <br>

        <label for="txtCCCD">CCCD</label>
        <input type="text" id="txtCCCD" name="txtCCCD" >
        @if ($errors->has('txtCCCD'))
            <p>Cần nhập CCCD</p>
        @endif
        <br>
        <label for="txtNgaySinh">Ngày sinh</label>
        <input type="date" id="txtNgaySinh" name="txtNgaySinh" >
        @if ($errors->has('txtNgaySinh'))
            <p>Cần nhập ngày sinh</p>
        @endif
        <br>
        <label for="txtGioiTinh">Giới tính</label>
        <select name="txtGioiTinh" id="txtGioiTinh">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select>
        @if ($errors->has('txtGioiTinh'))
            <p>Cần chọn giới tính</p>
        @endif
        <br>
        <label for="txtQueQuan">Quê quán</label>
        <input type="text" id="txtQueQuan" name="txtQueQuan" >
        @if ($errors->has('txtQueQuan'))
            <p>Cần nhập quê quán</p>
        @endif
        <br>
        @csrf
        <button>Thêm</button>
    </form>
    

</body>
</html>
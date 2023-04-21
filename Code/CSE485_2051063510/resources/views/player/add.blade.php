<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm cầu thủ</title>
</head>
<body>
    <a href="/team"><< Danh sách đội bóng</a>

    <br>
    <h1>Thêm cầu thủ thuộc đội bóng {!! $team_name !!}</h1>
    
    <form action="" method="POST">

        <label for="txtTenCT">Tên Cầu thủ</label>
        <input type="text" id="txtTenCT" name="txtTenCT">
        <br><br>

        <label for="txtGioiTinh">Giới tính</label>
        <select name="txtGioiTinh" id="txtGioiTinh">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select>
        <br><br>

        <label for="txtNgaySinh">Ngày sinh</label>
        <input type="date" id="txtNgaySinh" name="txtNgaySinh">
        <br><br>

        <label for="txtNoiSinh">Nơi sinh</label>
        <input type="text" id="txtNoiSinh" name="txtNoiSinh">
        <br><br>

        <label for="p_shirtnumber">Số áo</label>
        <input type="text" id="p_shirtnumber" name="p_shirtnumber">
        <br><br>
        @if ($errors->has('p_shirtnumber'))
        <p style = "color: red">Số áo phải nằm trong khoảng [1; 99]</p>
        @endif
        
        @csrf
        <button>Thêm</button>
    </form>
</body>
</html>
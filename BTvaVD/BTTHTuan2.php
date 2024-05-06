<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="BTTHTuan2.css">
</head>

<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "PKA_S";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }

    $sql = "SELECT SinhVien.MSSV, SinhVien.HoTen, DangKy.Ky, MonHoc.TenMH
        FROM SinhVien
        INNER JOIN DangKy ON SinhVien.MSSV = DangKy.MSSV
        INNER JOIN MonHoc ON DangKy.MaMH = MonHoc.MaMH";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
            <tr>
                <th>MSSV</th>
                <th>Họ tên</th>
                <th>Kỳ</th>
                <th>Đăng ký</th>
            </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["MSSV"] . "</td>
                <td>" . $row["HoTen"] . "</td>
                <td>" . $row["Ky"] . "</td>
                <td>" . $row["TenMH"] . "</td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "Không có dữ liệu";
    }

    $conn->close();
    ?>
</body>

</html>
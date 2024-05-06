<?php $sAccount = $_REQUEST["account"];
$sPassword = $_REQUEST["password"]
    ?>
<h1 style="color: blue;">Kết quả đăng nhập</h1>
Tên đăng nhập là:<?php echo "<span style='color: red;'> $sAccount </span>"; ?>
<br />
Mật khẩu là: <?php echo "<span style='color: red;'> $sPassword </span>"; ?>
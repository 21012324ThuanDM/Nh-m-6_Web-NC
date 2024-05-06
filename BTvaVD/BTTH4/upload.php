<?php
$uploadDirectory = "upload/";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileToUpload"])) {
    $targetFile = $uploadDirectory . basename($_FILES["fileToUpload"]["name"]);

    // Kiểm tra kích thước tệp tin
    if ($_FILES["fileToUpload"]["size"] > 2097152) {
        echo "Lỗi: Kích thước tệp quá lớn.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Tệp tin " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " đã được tải lên thành công.";
            echo '<a href="index.php">Quay lại Index</a>';
        } else {
            echo "Có lỗi xảy ra khi tải lên tệp tin.";
        }
    }
}
?>
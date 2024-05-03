<?php
$uploadDirectory = "upload/";

if (isset($_GET['filename'])) {
    $filename = $_GET['filename'];
    $filePath = $uploadDirectory . $filename;

    // Xóa tệp tin trên ổ đĩa
    if (file_exists($filePath)) {
        unlink($filePath);

        // Xóa tệp tin trong CSDL (ví dụ: nếu cần)
        // $deleteQuery = "DELETE FROM files WHERE filename = '$filename'";
        // mysqli_query($db, $deleteQuery);

        header("Location: index.php");
        exit();
    } else {
        echo "Không tìm thấy tệp tin để xóa.";
    }
}
?>
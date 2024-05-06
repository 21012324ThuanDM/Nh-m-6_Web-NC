<?php
$uploadDirectory = "upload/";

// Kiểm tra nếu đã chọn cách sắp xếp
if (isset($_GET['sort']) && ($_GET['sort'] == 'name' || $_GET['sort'] == 'date')) {
    $sortField = $_GET['sort'];
} else {
    $sortField = 'name'; // Mặc định sắp xếp theo tên
}

$sortOrder = isset($_SESSION['sortOrder']) ? $_SESSION['sortOrder'] : 'asc';

// Đảo ngược trạng thái sắp xếp khi người dùng nhấp vào cột
if (isset($_GET['sort']) && $_GET['sort'] == $sortField) {
    $sortOrder = ($sortOrder == 'asc') ? 'desc' : 'asc';
}

$files = glob($uploadDirectory . '*');

// Hàm sắp xếp tệp tin
function compareFiles($fileA, $fileB, $sortField, $sortOrder)
{
    if ($sortField == 'name') {
        $result = strnatcasecmp(basename($fileA), basename($fileB)); // Sắp xếp theo tên
    } elseif ($sortField == 'date') {
        $result = filemtime($fileA) - filemtime($fileB); // Sắp xếp theo ngày tải lên
    }
    return ($sortOrder == 'asc') ? $result : -$result;
}

// Sắp xếp mảng $files dựa trên $sortField
usort($files, function ($a, $b) use ($sortField, $sortOrder) {
    return compareFiles($a, $b, $sortField, $sortOrder);
});
$_SESSION['sortOrder'] = $sortOrder;
// Hiển thị danh sách các tệp tin đã tải lên
foreach ($files as $file) {
    $fileName = basename($file);
    $fileType = mime_content_type($file);
    $fileSize = filesize($file);
    $fileUploadDate = date("Y-m-d H:i:s", filemtime($file));

    echo "<tr>";
    echo "<td>$fileName</td>";
    echo "<td>$fileUploadDate</td>";
    echo "<td>$fileType</td>";
    echo "<td>$fileSize bytes</td>";
    echo "<td><a href='delete_file.php?filename=$fileName'>Xóa</a></td>";
    echo "</tr>";
}
?>
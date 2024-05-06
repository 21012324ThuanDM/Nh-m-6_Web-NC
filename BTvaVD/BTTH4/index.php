<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Upload Files</title>
</head>

<body>
    <h2>Tải lên tệp tin</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Chọn tệp tin để tải lên:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Tải lên" name="submit">
    </form>

    <h2>Danh sách các tệp đã tải lên</h2>
    <table border="1">
        <tr>
            <th><a href="?sort=name">Tên tệp</a></th>
            <th><a href="?sort=date">Ngày tải lên</a></th>
            <th>Loại tệp</th>
            <th>Kích thước</th>
            <th>Xóa</th>
        </tr>
        <?php include 'list_files.php'; ?>
    </table>
</body>

</html>
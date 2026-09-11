<?php
$hoten   = "Đoàn Thùy Thảo Trâm";              // thay bằng thông tin của bạn
$lop     = "24CNTT1";
$sothich = "cầu lông, đọc sách, lập trình web";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Giới thiệu bản thân</title>
</head>
<body>
  <h1>Tôi là <?php echo $hoten; ?> — lớp <?php echo $lop; ?></h1>
  <p>Sở thích: <?php echo $sothich; ?></p>
  <p>Trang được tạo lúc: <?php echo date("H:i:s d/m/Y"); ?></p>
</body>
</html>

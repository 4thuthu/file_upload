<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style = "text-align:center">Họa sĩ Tháng Tư</h1><br>
<h4 style = "text-align:center">*Lưu ý: tác phẩm nộp phải là file pdf</h2><br><br>
<div style = 'width:400px; margin-right:auto; margin-left:auto;'>
  <form action="product.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Họ và tên">
    <br><br>
    <input type="email" name="email" placeholder="Email">
    <br><br>
    <input type="file" name="image" placeholder="Tác phẩm">
    <br><br>
    <input style = "text-align:center" type="submit" value="Gửi">
  </form>
</div>
</body>
</html>

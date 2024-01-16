<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $image = $_FILES['image'];
  $image_name = $image['name'];

  if(!empty($name) && !empty($email) && !empty($image_name)){
    //Kiem tra duoi file
  $doc = strpos($image_name, ".");
  $extention = substr($image_name, $doc, 4);
  if($extention == ".jpg" | $extention == ".png"){
    move_uploaded_file($image['tmp_name'], 'images/'.$image_name);
    echo "Bạn đã nộp tác phẩm thành công."."<br>".'Chúng tôi sẽ thông báo qua email cho bạn ngay khi có kết quả!';
    echo '<br>'.'<a href="images/'. $image_name .'">Xem lại tác phẩm</a>';
  }else{
    echo 'sai định dạng';
  }
  }else{
    echo "Điền đầy đủ các trường!";
  }
}
?>
</body>
</html>

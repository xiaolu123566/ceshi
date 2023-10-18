<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $number = $_POST["number"];
  // 将数字写入到服务器本地的文件中
  file_put_contents("number.txt", $number);
}
?>

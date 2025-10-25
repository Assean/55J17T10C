<?php
$Firstname = $_POST["Firstname"];
$Lastname = $_POST["Lastname"];
$Phone = $_POST["Phone"];
$Password = $_POST["Password"];
echo $_POST["Verification"];
echo $_POST["Verify_ans"];


if($_POST["Verification"] == $_POST["Verify_ans"]){
    // 正確
    $dsn = "mysql:host=localhost;dbname=web01;charset=utf8";
    $pdo = new PDO($dsn, "admin", "1234");
    $insert_sql = "INSERT INTO `tickets` (`id`, `firstname`, `lastname`, `phone`, `password`) VALUES (NULL, '$Firstname', '$Lastname', '$Phone', '$Password');";
$pdo->query($insert_sql);
//寫入資料庫
    echo "<script>alert('驗證碼正確')</script>";
    echo "<script>location.href='home.html'</script>";
}else{
  // 錯誤   
  echo "<script>alert('驗證碼正確')</script>";
  echo "<script>location.href='home.html'</script>";
}
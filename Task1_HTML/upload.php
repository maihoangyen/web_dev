<?php
    session_start();
    if (!(isset($_SESSION['username']) && $_SESSION['username'])) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Vui lòng đăng nhập');window.location.href='login.html';</script>");
    }
?>
<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="upload.css">
    <title>Files Upload and Download</title>
  </head>
  <body style="background: url('img/d.jpg');">

    <div class="container">
      <div class="row">
        <form action="upload.php" method="post" enctype="multipart/form-data" style="background:#fff;">
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save" style="background-color:#003399;color:white">upload</button>
        </form>
      </div>
    </div >
      <p style="text-align:center; color: #ffff">
        <b> Click tại đây để trở lại <a href="index.html" style="color: #00FFFF;">Trang chủ</a><br/></b>
      </p>
  </body>
</html>
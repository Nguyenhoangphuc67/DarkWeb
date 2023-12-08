<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="code.css">
<?php
        $connect=mysqli_connect("localhost","root","","database");
        if(!$connect){
            exit("Kết nối thất bại");
        }
        $query="SELECT * from videos    ";
        $ketqua = mysqli_query($connect,$query);
    ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KELLYSAYHI</title>
</head>
<body>
    <div class="bg">
        <div class="o1">
           <h1>DarkWeb</h1>
           <div class="btn1"><center>
            <a class="t1" href="video.php">Video</a></center>
           </div>
           <div class="btn2"><center>
           <a class="t2" href="">Picture</a></center>
           </div>
        </div>
    </div>
   </body>
</html>
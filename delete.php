<?php
    $connect=mysqli_connect("localhost","root","","database");
    if(!$connect){
        exit("Kết nối thất bại");
    }
    $acc=$_GET['id'];
    $query="DELETE FROM videos WHERE id='$acc'";
    $ketqua=mysqli_query($connect,$query);

    echo "<script>";
    //if($ketqua){
    //    echo "alert('Xóa thành công');";
    //}
   // else{
    //    echo "alert('Xóa không thành công');";
   // }
    echo "window.location='upload.php';";
    echo "</script>";
?>
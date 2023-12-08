<html>
<link rel="stylesheet" href="css.css">
    <?php
        $connect=mysqli_connect("localhost","root","","database");
        if(!$connect){
            exit("Kết nối thất bại");
        }
        $query="SELECT * from videos";
        $ketqua = mysqli_query($connect,$query);
    ?>

    <body>
        <div class="bg">
            <div class="khung">
        <h1> <center>VIDEOS</center> </h1>
        <table class="container" align="center" border="10" celpadding="100">
            <?php
                $stt=1;
                while($row=mysqli_fetch_array($ketqua)){
                    echo "<tr>";
                        //echo "<td>".$stt."</td>";
                        //echo "<td>".$row["id"]."</td>";
                        echo "<div>";
                        echo "<td><video src='".$row["loca"]."' controls width='520px' height='400px'></td>";   
                        echo "</div>";   
                    $stt++;
                } 
            ?>
            </table>
            </div>
        </div>
    </body>
</html>
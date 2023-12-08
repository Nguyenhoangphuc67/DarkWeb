<html>
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
        <table class="container" align="center" border="1" celpadding="10">
            <tr>
                <td boder="2"><center><b>ID</b></center></td>
                <td boder="2"><center><b>NAME</b></center></td>
                <td boder="2"><center><b>LOCATION</b></center></td>
            </tr>
            <?php
                $stt=1;
                while($row=mysqli_fetch_array($ketqua)){
                    echo "<tr>";
                        echo "<td>".$stt."</td>";
                        echo "<td>".$row["name"]."</td>";
                        echo "<td><video src='".$row["loca"]."' controls width='320px' height='200px' ></td>";        
                        echo "<td><center><a href=\"delete.php?id=".$row["id"]."\">Xóa</a></center></td>";
                    $stt++;
                } 
            ?>
            </table>
            </div>
        </div>
    </body>
</html>
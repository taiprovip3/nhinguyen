<?php
    $un = $_SESSION['username'];
    $sql = "select * from playerfiles where username = '$un'";
    $result = mysqli_query($dbOFF, $sql);
	$json = mysqli_fetch_all ($result, MYSQLI_ASSOC); //Trả về là 1 table dữ liệu
    json_encode($json); //Mã hóa table vừa trả về dạng json
    $countrow = count($json); //Trả về số lượng dòng của table
    for ($i = 0; $i < $countrow; $i++)
    {
        $row = $json["$i"];//Json{1, 2} dữ liệu, gắn $row = dữ liệu của json[1] hoặc json[2], $row như 1 dòng trên T-SQL(chứa nhiều cột)
        echo '
        <div>
            <img class="img-thumbnail" src="../img/folder.png" alt="file'.$i.'" width="50%">
            <br>
            <a href="'.$row["link"].'" target="_blank">'.$row["filename"].' <i class="fas fa-arrow-circle-down" style="display: block;"> Download</i></a>
        </div>
        ';
    }
?>
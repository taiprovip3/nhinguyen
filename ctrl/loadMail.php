<?php
    $un = $_SESSION['username'];
    $sql = "select * from playermails where fromwho = '$un' or towho= '$un'";
    $result = mysqli_query($dbOFF, $sql);
	$json = mysqli_fetch_all ($result, MYSQLI_ASSOC); //Trả về là 1 table dữ liệu
    json_encode($json); //Mã hóa table vừa trả về dạng json
    $countrow = count($json); //Trả về số lượng dòng của table
    for ($i = 0; $i < $countrow; $i++)
    {
        $row = $json["$i"];//Json{1, 2} dữ liệu, gắn $row = dữ liệu của json[1] hoặc json[2], $row như 1 dòng trên T-SQL(chứa nhiều cột)
        $response = $row["response"];
        if($response == "first"){
            echo '
            <tr>
                <input type="hidden" id="idmail" value="'.$row["mailid"].'">
                <td id="tdFrom">'.$row["fromwho"].'</td>
                <td id="tdTo">'.$row["towho"].'</td>
                <td id="tdTitle">'.$row["title"].'</td>
                <td>'.$row["content"].'</td>
                <td>
                    <button class="btn btn-link btn-xs" id="replymail">phản hồi <i class="fas fa-reply"></i></button>
                    <button class="btn btn-secondary btn-xs" id="deletemail">Xoá</button>
                </td>
            </tr>
            ';
        } else {
            echo '
            <tr>
                <input type="hidden" id="idmail" value="'.$row["mailid"].'">
                <td id="tdFrom">'.$row["fromwho"].'</td>
                <td id="tdTo">'.$row["towho"].'</td>
                <td id="tdTitle">'.$row["title"].'</td>
                <td>'.$row["content"].'</td>
                <td>
                    <button class="btn btn-secondary btn-xs" id="deletemail">Xoá</button>
                </td>
            </tr>
            ';
        }
    }
?>
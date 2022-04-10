<?php
    $sql = "select * from playercomments";
    $result = mysqli_query($dbOFF, $sql);
    $json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
    json_encode($json);
    $countrow = count($json);
    for ($i = 0; $i < $countrow; $i++)
    {
        $row = $json["$i"];
        // echo '
        //     <hr>
        //     <div id="comm">
        //         <div>
        //             <i class="fa fa-user fa-3x"></i>
        //         </div>
        //         <div>
        //             <b>'.$row["username"].' vào lúc '.$row["date"].' AM</b><br>
        //             <i class="fa fa-pencil-square"> '.$row["content"].'</i>
        //         </div>
        //     </div>
        // ';
        $day = substr($row["time"],8,2);
        $month = substr($row["time"],5,2);
        $year = substr($row["time"],0,4);
        $time = substr($row["time"],11);
        $date = $day."/".$month."/".$year;
        echo '
            <div class="cmt-user" id="cmt-0">
            <div id="cmt-user-left">
                <img src="./img/cmt-user.png" alt="" class="rounded-circle" width="100%">
            </div>
            <div id="cmt-user-right">
                <p><b>'.$row["username"].'</b> <i>(ngày '.$date.' vào lúc '.$time.')</i></p>
                <p><i class="fas fa-pen">:</i> '.$row["comment"].'</p>
            </div>
            </div>
        ';
    }
?>
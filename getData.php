<?php
 
    $conn = mysqli_connect("localhost", "root", "", "cyclo");
    $response = array();
    if($conn){
        $sql = "select * from users WHERE `users`.`id_user` = 10";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Content-Type: JSON");
            $i=0;
            while($row =mysqli_fetch_assoc($result)){
                $response[$i]['id_user'] = $row ['id_user'];
                $response[$i]['fullname'] = $row ['fullname'];
                $response[$i]['email'] = $row ['email'];
                $response[$i]['phone'] = $row ['phone'];
                $response[$i]['image'] = $row ['image'];

                $i++;
            }
            echo json_encode($response, JSON_PRETTY_PRINT);
        }
    }
    else {
        echo "Database connection failed";
    }
?>

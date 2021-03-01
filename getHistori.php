<?php
 
    $conn = mysqli_connect("localhost", "root", "", "cyclo");
    $response = array();
    if($conn){
        $sql = "select * from histori";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Content-Type: JSON");
            $i=0;
            while($row =mysqli_fetch_assoc($result)){
                $response[$i]['id_transaksi'] = $row ['id_transaksi'];
                $response[$i]['kendaraan'] = $row ['kendaraan'];
                $response[$i]['waktu'] = $row ['waktu'];
                $response[$i]['waktu_akhir'] = $row ['waktu_akhir'];
                $response[$i]['tagihan'] = $row ['tagihan'];

                $i++;
            }
            echo json_encode($response, JSON_PRETTY_PRINT);
        }
    }
    else {
        echo "Database connection failed";
    }
?>

<?php 
    include 'connect.php';    
    header('Content-type: application/json');

    $sql = "SELECT * FROM wmsu_journal WHERE wj_id = 1";
    $result = mysqli_query($connect,$sql);


    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo "vr1: " . $row["vr1"]. " - vr2: " . $row["vr2"]. "<br>";
            $banner = $row["wj_text"];

        }
        // print_r($food);
    }
    echo json_encode($banner);
   

?>

<?php


    // header('Content-type: application/json');
    $connect = mysqli_connect("localhost", "root", "", "wmsu"); 

    $txtorg1 = $_POST['textjournal'];
    $query2 = "UPDATE `wmsu_journal` SET `wj_text`='$txtorg1' WHERE wj_id = 1";

    $fileDestination = "../img/".basename($_FILES['image']['name']);
    $filetmp = $_FILES['image']['tmp_name'];
      
    move_uploaded_file($filetmp,$fileDestination);
      
    if(mysqli_query($connect, $query2)){
        header('Refresh:.5; url=../index.php');
    }else{
        echo json_encode('Update Failed');
    }

?>
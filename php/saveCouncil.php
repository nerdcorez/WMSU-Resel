<?php


    // header('Content-type: application/json');
    $connect = mysqli_connect("localhost", "root", "", "wmsu"); 

    $txtorg1 = $_POST['textcouncil'];
    $query2 = "UPDATE `university_counsil` SET `uc_text`='$txtorg1' WHERE uc_id = 1";

    $fileDestination = "../img/".basename($_FILES['image']['name']);
    $filetmp = $_FILES['image']['tmp_name'];
      
    move_uploaded_file($filetmp,$fileDestination);
      
    if(mysqli_query($connect, $query2)){
        header('Refresh:.5; url=../index.php');
    }else{
        echo json_encode('Update Failed');
    }

?>
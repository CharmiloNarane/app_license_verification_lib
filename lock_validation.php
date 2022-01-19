<?php 

    $id = $_GET['id'];
    $inactiveStatus= 0;
    $alertMessage = "Lock successful!";

     // include database connection
    include_once("DBinfo.php");
    $result =  mysqli_query($conn, "UPDATE purchase set status ='$inactiveStatus' where id=$id");

    if(!$result){
        $message = "Validation update failed!";
        header('Location: https://localhost/package_validation/check_validations.php'); 
    }else{
        $message = "Lock successful!";
        echo "<script>alert('$alertMessage');</script>";
        header('Location: https://localhost/package_validation/check_validations.php'); 
    }
    
    print($message);
    mysqli_close($conn);

?>
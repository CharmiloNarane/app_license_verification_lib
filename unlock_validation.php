<?php 

    $id = $_GET['id'];
    $activeStatus= 1;
    $alertMessage = "Unlock successful!";

     // include database connection
    include_once("DBinfo.php");
    $result =  mysqli_query($conn, "UPDATE purchase set status ='$activeStatus' where id=$id");

    if(!$result){
        $message = "Validation update failed!";
        header('Location: https://localhost/package_validation/check_validations.php'); 
    }else{
        $message = "Unlock successful!";
        echo "<script>alert('$alertMessage');</script>";
        header('Location: https://localhost/package_validation/check_validations.php'); 
    }
    
    print($message);
    mysqli_close($conn);

?>  
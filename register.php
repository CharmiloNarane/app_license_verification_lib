<?php 

require("DBinfo.php");

    //get the post records
    $txtPackageName = trim($_POST['package_name']);
    $txtPurchaseCode = trim($_POST['purchase_code']);
    $txtWebsiteUrl = trim($_POST['website_url']);

    $sql = "insert into purchase (package_name,purchase_code,website,status) VALUES ('$txtPackageName','$txtPurchaseCode','$txtWebsiteUrl', '1')";
    $result = mysqli_query($conn,$sql);

    if(!$result){
        $output= "{'msg': 'fail!'}";
        header('Location: https://localhost/package_validation/index.php?submitted=fail'); 
       
    }else{
        //start the session if already not started
        session_start();
        $_SESSION['success_message'] = "Contact form saved successfully.";
        header('Location: https://localhost/package_validation/index.php?submitted=successfully'); 
        $output= "{'msg': 'success'}";
    }

    print($output);
    mysqli_close($conn);


?>
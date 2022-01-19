<?php
    include_once('DBinfo.php');

     if(isset($_GET['package_name'])){    
        $filter = mysqli_real_escape_string($conn,$_GET['package_name']);

        //fetch table rows from mysql db
        $sql = "select * from purchase where package_name='$filter'";
        $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));

        //create an array
        $emparray = array();
        while($row =mysqli_fetch_assoc($result))
        {
            $emparray[] = $row;
        }
        echo json_encode($emparray);
    }else{
        echo "package name was not passed!";
    }

        //close the db connection
        mysqli_close($conn);
?>
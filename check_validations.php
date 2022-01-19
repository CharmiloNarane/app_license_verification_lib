<?php
 include_once('DBinfo.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- font Awesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
     <!-- main css -->
     <link href="css/main.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">


    <script type="text/javascript">
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>


    <title>Check validation!</title>
  </head>
  <body>
  
   <!-- container -->
    <div class="container">

            <!-- Side Navbar -->
        <div class="wrapper">
            <!-- Sidebar -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Menu</h3>
                </div>

                <ul class="list-unstyled components">
                    <p>Package verification</p>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Options</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="index.php">Register App Package</a>
                            </li>
                            <li>
                                <a href="#">Check validation</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                </ul>
            
            </nav>
            <!-- end of navbar -->
        </div>    
        <!-- end of side navbar div -->

        <!-- Page Content -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                </div>
            </nav>

                    <!-- Verification forms div area -->
                <div class="row d-flex justify-content-center mt-5"> 
                <div class="col-12 col-md-6 col-lg-7"> 
                        <h4 class="text-muted text-capitalize pb-2">Package Validation List</h4>

                        <?php
                            $result = mysqli_query($conn,"SELECT * FROM purchase");
                        ?>
                        <?php
                            if (mysqli_num_rows($result) > 0) {
                        ?>
                            <div style="height: 400px; width: 900px; overflow: scroll;"> 
                                <table class='table table-stripped'>
                                
                                    <tr class="bg-dark text-white">
                                    <td><strong>No</strong></td>
                                    <td><strong>Package Name</strong></td>
                                    <td><strong>Purchase Code</strong></td>
                                    <td><strong>Website</strong></td>
                                    <td><strong>Status</strong></td>
                                    <td><strong>Action</strong></td>
                                    </tr>
                                
                                    <?php
                                        $i=0;
                                        while($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <tr>
                                        <td><?php echo $row["id"]; ?></td>
                                        <td><?php echo $row["package_name"]; ?></td>
                                        <td><?php echo $row["purchase_code"]; ?></td>
                                        <td><?php echo $row["website"]; ?></td>
                                        <td><?php if(($row["status"])==1){
                                                    echo '<div class="text-success">Active</div';
                                                }else{ echo '<div class="text-danger">Disabled</div';}   ?></td>
                                        <td><a href="lock_validation.php?id=<?php echo $row["id"]; ?>" style="color:orange" class="mx-1"><i class="fa fa-lock" aria-hidden="true"></i></a> 
                                        <a href="unlock_validation.php?id=<?php echo $row["id"]; ?>" style="color:green"><i class="fa fa-unlock" aria-hidden="true"></i></a>
                                        <a href="delete_validation.php?id=<?php echo $row["id"]; ?>" style="color:red"><i class="fa fa-trash" aria-hidden="true"></i></a></td>          
                                            </tr>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                </table>
                                <!-- end of table -->
                            </div>  
                            <!-- end of table wrapper scroolbar -->
                        <?php
                        }
                        else{
                            echo "No result found on table";
                        }
                        ?>

                    </div> 
                    <!-- end of col-12 table area -->
                </div> 
                <!-- end of row area with table -->

        </div>
       <!-- end of page content -->

   </div>
   <!-- end of container --> 
   

 <!-- jQuery CDN - Slim version (=without AJAX) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Datatables -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.11.3/datatables.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body> 
</html>
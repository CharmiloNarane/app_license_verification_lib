<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- main css -->
    <link href="css/main.css" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <title>insert App purchase package!</title>
  </head>
  <body>

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
                            <a href="check_validations.php">Check validation</a>
                        </li>
                        <li>
                            <a href="disable_validation.php">Disable validation</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
            </ul>

        </nav>
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
        </div>
        </div>

        <!-- Registation form -->
        <div class="row d-flex justify-content-center mt-5"> 
          <div class="col-10 col-md-6 col-lg-7"> 

                </br></br>
                <h3 class="text-center mx-auto btn btn-warning">About this library</h3>
                <div class="bg-light text-justify p-4">
                </br>
                    <strong>1. Web CMS usage</strong>

                    <p>This Web library was build to make it possible for users who have an active app to get notified if wheather they are using a valid or expired 
                    validation code offered by the app developer itself. it can be used to manage Paid subscription apps on witch users have to pay and renewal 
                    concurrent fees to use and access a certain service. the web platform as a side menu witch contains the following options:
                    </p>
                    
                    <p>- <u>Register package</u>:   Witch allow new valid subscriptions to be registered with the app information (package name, validation code and website url);</br>
                       -  <u>Check validation</u>:   witch retrieves a list of all active and Disabled/expired subscriptions </br>
                       -  <u>Disable validation</u>:   the option to disable a packaga_name based on validation code and package_name</br>
                          
                    
                       <strong>2. API calls</strong>
               
                
                </div>
              </div> 

        </div>    

    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
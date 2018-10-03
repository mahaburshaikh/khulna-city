<html>
    <head>
        <title>Khulna City</title>
        <link type="text/css" rel="stylesheet" href="assets/bootstrap-3.0.3/css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="styles/main.css" />
        <?php
        include_once './admin/database.php';
        ?>
        
        <?php
include_once './admin/database.php';
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $statement = $db->prepare("SELECT * FROM education WHERE id = ?");
    $statement->execute(array($id));
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
}
?>
       
    </head>
    <body>
        
        <div class="container">

            <div class="header-top">
                
                <div class="pull-left">

                    <a href="./"><img src="images/logo.png" style="width: 200" height="20%"></a>
                </div>
                <div  style="text-align: center" >
                    <h1  >AMAZING KHULNA CITY</h1>
                </div>
                <div class="pull-right" style="padding-top: 12px;">
                    <a href="admin/login.php"><span class="phone"><span class="glyphicon glyphicon-sign"></span> Log In</span></a>
                    
                </div>
                <div class="clear"></div>
            </div>

            <div class="navigation-bar">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                        <a class="navbar-brand" href="./"><span class="glyphicon glyphicon-home"></span></a>

                        <div class="collapse navbar-collapse" id="myNavbar">
  
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">KHULNA
                                        <span class="caret"></span></a>
                                 
                                    <ul class="dropdown-menu">
                                        <li><a href="beautiful_place.php">Beautiful Places</a></li>
                                        <li><a href="park.php">Park</a></li>
                                        <li><a href="educational_institution.php">Educational Institution</a></li>
                                        <li><a href="restaurant.php">Restaurants</a></li>
                                        <li><a href="hospital.php">Hospital</a></li>
                                        <li><a href="market.php">Market</a></li>
                                        <li><a href="road.php">Road</a></li>
                                        <li><a href="BRIDGE.php">Bridge</a></li>
                                        
                                    </ul>
                                </li>
                                <li><a href="ABOUT_US.php">About Us</a></li> 
                            </ul>
                        </div>
                    </div>
                </nav>
            </div> 
       <!-- End Navigation bar-->



            <div class="sidebar-home">
                <div class="row">
                    <div class="col-sm-9">

                        <div class="site-content">
                                                      
 <?php
                             foreach ($result as $row){
                            ?>

<!--                                <div class="row single_place">
                                    <div class="col-sm-5">
                                        <img src="restaurant_image/?>" class="img-thumbnail" style="max-width: 280px;height: 160px;"/>
                                    </div>
                                    <div class="col-sm-7">

                                        <div class="about">
                                            <h4></h4>
                                            <p>
                                                <?php
                                                ?>
                                            </p>
                                            <a href="#" class="more btn btn-success">more details</a>
                                        </div>
                                    </div>
                                </div>-->

<!--<img src="restaurant_image/?>" class="img-thumbnail" style="max-width: 280px;height: 160px;"/><br>-->
<div class="photo">
    <img src="education_image/<?php echo $row['place_image']; ?>" style="width: 800px; height: 400px;"><br>
</div>
   <div class="cription"> 
 <?php
echo $row['name']."<br>";
echo $row['place']."<br>";
echo $row['description'];
?>
                            </div>
<?php
                             }
                             ?>
     <div class="clear"></div>


                        </div>




                    </div> <br>
                    
                               
                                <div class="widget">
                                    <h3 id="grad" class="margin-bottom0 margin-top0">Gallery</h3>
                                    <div class="single_demo_post">
                                        <img src="images/home1.jpg" class="img-thumbnail" style="width: 25%; height: 150px"/>
                                        <img src="images/home2.jpg" class="img-thumbnail" style="width: 25%; height: 150px"/>
                                        <img src="images/home3.jpg" class="img-thumbnail" style="width: 25%; height: 150px"/>
                                        <img src="images/home4.jpg" class="img-thumbnail" style="width: 25%; height: 150px"/>
                                        <img src="images/home5.jpg" class="img-thumbnail" style="width: 25%; height: 150px"/>
                                        

                                        <a href="">View More</a>

                                    

                        </div> 
                    </div>
                </div>

            </div>



            <div class="footer-top">
                <div class="row">
                    <div class="col-sm-8">
                        <h3 style="font-size: 28px">Links</h3>
                        <ul>
                            <li><a href="https://BarisalResturant.com/Barisal">Barisal Resturant</a></li>
                            <li><a href="https://ShipManagemant.com/Ship">Ship Managemant</a></li>
                            <li><a href="https://NewsPortal.com/News">News Portal</a></li>
                            <li><a href="https://SchoolManagement.com/School">School Management</a></li>
                            <li><a href="https://PSTULibrary.com/PSTU">PSTU Library</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="footer">
                <div class="row">
                    <div class="pull-left">
                        &copy; 2016 All rights reserved <a href="./">About Khulna City</a>
                    </div>
                    <div class="pull-right">
                        <div id="developed">
                            Developed by <a href="https://facebook.com/mahabur">Mahabur Rahman</a>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>


        </div>

        <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="assets/bootstrap-3.0.3/js/bootstrap.min.js"></script>
    </body>
</html>



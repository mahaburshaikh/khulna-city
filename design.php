<html>
    <head>
        <title>Khulna City</title>
        <link type="text/css" rel="stylesheet" href="assets/bootstrap-3.0.3/css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="styles/main.css" />
       
    </head>
    <body>

        <div class="container">

            <div class="header-top">
                
                <div class="pull-left">

                    <a href="./"><img src="images/logo.jpg" style="width: 200" height="20%"></a>
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
                                <li class="active"><a href="#">Home</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">KHULNA
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                         <li><a href="BEAUTIFUL_PLACES.php">Beautiful_Places</a></li>
                                        <li><a href="PARK.php">Park</a></li>
                                        <li><a href="EDUCATIONAL_INSTITUTION.php">Educational Institution</a></li>
                                        <li><a href="RESTURANTS.php">Resturants</a></li>
                                        <li><a href="HOSPITAL.php">Hospital</a></li>
                                        <li><a href="MARKET.php">Market</a></li>
                                        <li><a href="ROAD.php">Road</a></li>
                                        <li><a href="BRIDGE.php">Bridge</a></li>
                                        <li><a href="RAILSTATION.php">Rail Station</a></li>
                                    </ul>
                                </li>
                                <li><a href="ABOUT_US.php">About Us</a></li> 
                            </ul>
                        </div>
                    </div>
                </nav>
            </div> <!-- End Navigation bar-->


            <div class="main-slider">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/home1.jpg" alt="Chania" height="50" width="1000">
                            <div class="carousel-caption">
                                <h3>Chania</h3>
                                <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                                
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/home2.jpg" alt="Chania" height="50" width="1000">
                            <div class="carousel-caption">
                                <h3>Chania</h3>
                                <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/home3.jpg" alt="Flower" height="50" width="1000">
                            <div class="carousel-caption">
                                <h3>Flowers</h3>
                                <p>Beatiful flowers in Kolymbari, Crete.</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/home4.jpg" alt="Flower" height="50" width="1000">
                            <div class="carousel-caption">
                                <h3>Flowers</h3>
                                <p>Beatiful flowers in Kolymbari, Crete.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>  <!-- End Main Slider-->

            <div class="sidebar-home">
                <div class="row">
                    <div class="col-sm-9">

                        <div class="site-content">


                            <?php 
                            foreach($result as $row){
                            ?>
                                <div class="row single_place">
                                    <div class="col-sm-5">
                                        <img src="images/<?php $row['image']; ?>" class="img-thumbnail" style="max-width: 280px;height: 160px;"/>
                                    </div>
                                    <div class="col-sm-7">

                                        <div class="about">
                                            <h4><?php $row['resraurant_name']; ?></h4>
                                            <p>
                                                <?php
                                                $short = substr($row['description'],1,50);
                                                echo $short;
                                                ?>
                                            </p>
                                            <a href="#?id=<?php echo $row['id']; ?>" class="more btn btn-success">more details</a>
                                        </div>
                                    </div>
                                </div>

                            <?php 
                            
                            } 
                            ?>
                            <div class="clear"></div>


                        </div>




                    </div>
                    <div class="col-sm-3">

                        <div class="sidebar">

                            <div class="category_sidebar">
                                <div class="widget">
                                    <h3 id="grad" class="margin-bottom0 margin-top0">Gallery</h3>
                                    <div class="single_demo_post">
                                        <img src="images/home1.jpg" class="img-thumbnail" style="width: 100%; height: 150px; margin-top:3px"/>
                                        <img src="images/home2.jpg" class="img-thumbnail" style="width: 100%; height: 150px; margin-top:3px"/>
                                        <img src="images/home3.jpg" class="img-thumbnail" style="width: 100%; height: 150px; margin-top:3px"/>
                                        <img src="images/home4.jpg" class="img-thumbnail" style="width: 100%; height: 150px; margin-top:3px"/>
                                        <img src="images/home5.jpg" class="img-thumbnail" style="width: 100%; height: 150px; margin-top:3px"/>
                                        

                                        <a href="">View More</a>

                                    </div>
                                </div>

                            </div>

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

<html>
    <head>
        <title>Khulna City</title>
        <link type="text/css" rel="stylesheet" href="assets/bootstrap-3.0.3/css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="styles/main.css" />
        <?php
        include_once './admin/database.php';
        ?>
       
    </head>
    <body>
        
        <div class="container">

            <div class="header-top">
                
                <div class="pull-left">

                    <a href="./"><img src="images/logo.png" style="width: 200" height="20%"></a>
                </div>
                <div  style="text-align: center" >
                    <h1  ><big>AMAZING KHULNA CITY</big></h1>
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
                            <img src="images/first.jpg" alt="Chania" height="50" width="1000">
                            
                        </div>

                        <div class="item">
                            <img src="images/1slider2.jpg" alt="Chania" height="50" width="1000">
                           
                        </div>

                        <div class="item">
                            <img src="images/2slider1.jpg" alt="Flower" height="50" width="1000">
                            
                        </div>

                        <div class="item">
                            <img src="images/home4.jpg" alt="Flower" height="50" width="1000">
                            
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
            </div><br>  <!-- End Main Slider-->
            <div style="color: white"><h2>HISTORY OF KHULNA</h2></div>
            <div class="describe">
                <p>Khulna (Bengali: খুলনা ) is the fourth-largest city in Bangladesh. It is the administrative seat of Khulna District and Khulna Division. As of the 2011 census, the city has a population of 663,342.[4]</p><br>
                <p>Khulna was part of the ancient kingdoms of Vanga or Samatata. In the 12th century, it came under the Sena dynasty during the reign of Ballal Sena and formed part of the Bagri division of Bengal. The previous name of this region was Jalalabad.
During the 14th century, Shamsuddin Firoz Shah became the first Muslim ruler to arrive in the city. The Muslim settlements in the city increased during the time of Shamsuddin Ilyas Shah. Subsequently, many mosques and shrines began to be established. In the 15th century, a Muslim saint named Khan Jahan Ali acquired a jagir (fiefdom) comprising a large part of the greater Khulna Division from the king of Gauḍa. Later he started to exercise full rights of sovereignty and continued to do so till his death in 1459.[7]
 </p>
 <a href="history.php" style="color: white">Read more</a>
            </div>

           
                                <div class="web">
                                    <h3 id="grad" class="margin-bottom0 margin-top0">Latest News</h3>
                                    <div class="single_demo_post">
                                        <h3>About MMBS</h3>
                                        <h4 style="color: white ">
                                            The Bachelor of Medicine, Bachelor of Surgery (MBBS) degree programme is divided into three parts by the first, second, and third professional examinations. If a student fails one of these exams, they may sit it again six months later. Under the 2002 "carry on" system, students could continue taking classes in the next academic session while preparing to retake an exam. 
                                            <a href="">Read More</a>
                                        </h4><hr>
                                   
                                    <h3 id="grad" class="margin-bottom0 margin-top0">Gallery</h3>
                                    
                                        <img src="images/home1.jpg" class="img-thumbnail" style="width: 30%; height: 150px"/>
                                        <img src="images/first.jpg" class="img-thumbnail" style="width: 30%; height: 150px"/>
                                        <img src="images/1slider2.jpg" class="img-thumbnail" style="width: 30%; height: 150px"/>
                                        <img src="images/home4.jpg" class="img-thumbnail" style="width: 30%; height: 150px"/>
                                        <img src="images/2slider2.jpg" class="img-thumbnail" style="width: 30%; height: 150px"/>
                                        
                                        <a href="">View More</a>

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

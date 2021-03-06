<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inesh | Mobile App Development</title>

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<!-- mobile responsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
$(function(){
$("#header1").load("header.php");
$("#footer1").load("footer.php");
$("#modal23").load("modal.php");
});
    </script>
</head>

<body>
<div class="page-wrapper">  
    

    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- Preloader -->


   <div id="header1"></div>
    
        <!--End Main Header -->
    
    <!-- MOBILE APP SECTION -->

    <div class="container" style="margin-top: 3rem;">
        <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="section-title" style="margin-bottom: 4rem;">
                    <h2 class="text-center" style="font-size:3.2rem">Mobile Application Development</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1" style="margin-bottom: 2rem;">
                 <p class="my-3 text-justify">
                    <!-- Mobile and smartphones are the newest technology that has grown in the market. Each person has
                    a mobile phone which he uses to access the Internet. It is true that the complete use of mobile
                    phones has won the virtual world. If you are a business owner and are looking for online marketing,
                    then your business website should be ready to reach millions of people who are the owner of mobile
                    phones for the extended audience of subscribers. Using the mobile website design you can take
                    advantage of the amazing contact between your brand and the target audience. Mobile apps are
                    designed to be run on smart phones, tablets and other electronic devices. -->
                        <?php 
                            include("connect.php");
                            $sql = 'SELECT * from `mobile_main`';
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo htmlspecialchars_decode($row['content']);
                                }
                            }
                            $conn->close();
                        ?>
                </p>
                <div class="row text-center" id="buttonn">
                    <button class="btn btn-lg btn-default" style="color: white; background-color:#E13737; border-radius: 0px!important; margin-top: 10vh; box-shadow: 1px 1px 1px 1px #E13737; border: 1px solid #E13737" data-toggle="modal" data-target="#myModal">
                        Request a quote&ensp;<span class="glyphicon glyphicon-arrow-right"></span>
                    </button>
                </div>
            </div>

            <div class="col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1" style="margin-bottom: 2rem;">
                <img src="./final-assets/Mobile Application Development/top.png" class="img-fluid" alt="">
            </div>
        </div>
            
    </div>

       
            <div id="modal23"></div>

                 
    <div class="container" style="margin-top: 2rem;">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <div class="section-title" style="margin-bottom: 4rem;">
                    <h2 class="text-center" style="font-size:3.2rem">Overview</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <p class="my-3 text-justify">
                    <!-- The purpose of a mobile application is to reach millions of potential customers who were not
                    previously available through any static or desktop website. Web pages have been designed purely on
                    the basis of client needs and what kind of audience they want to target. Now to provide with such
                    mobile website design services, there is a need to find a developer who is trustworthy and
                    experienced. Inesh is the leading mobile application development company which specializes in both
                    android and IOS application development. With a team of dedicated experts, who are not only
                    developing the vast knowledge of the website, but also experience how to make the website a
                    successful ranking-wise.
                </p>
                <p class="my-3 text-justify">
                    Our professionals are innovative and know how to give your mobile application an edge over others.
                    We have actually made a mark in the website design industry in a very short time. Our sole purpose
                    is customer satisfaction and work from a dedicated way to achieve great results. -->
                        <?php 
                            include("connect.php");
                            $sql = 'SELECT * from `mobile_overview`';
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo htmlspecialchars_decode($row['content']);
                                }
                            }
                            $conn->close();
                        ?>
                </p>
            </div>
        </div>   
    </div>

    <div class="container" style="margin-top: 12vh;">
        <div class="row">
            <div class="col-xs-offset-1 col-sm-10">
                <div class="row">
                    <div style="margin-bottom: 4rem; color: black;">
                        <h2 style="font-size:2.5rem" class="text-center">Best Features of our designed mobile applications</h2>
                    </div>
                </div><br/>
                <!-- <p> -&ensp;&ensp; RESPONSIVE DESIGN</p>
                <p> -&ensp;&ensp; SEO FRIENDLY</p>
                <p> -&ensp;&ensp; FRIENDLY ADMIN PANEL</p>
                <p> -&ensp;&ensp; FULLY CUSTOMISABLE</p>
                <p> -&ensp;&ensp; UNIQUE CONTENT</p>
                <p> -&ensp;&ensp; DOMAIN HOSTING PANEL</p>
                <p> -&ensp;&ensp; CLEAN CODE</p>
                <p> -&ensp;&ensp; UNLIMITED OPTIONS</p>
                <p> -&ensp;&ensp; FREE SUPPORT</p> -->
                <div class="row">
                    <div class="col-xs-6 col-sm-4">
                        <div class="dontknowthename">
                            <div class="cb-container" >
                                <div clas="icon">
                                    <img src="./final-assets/Mobile Application Development/Responsive Design - Best Features.png" alt="Avatar" class="overlay-image img-fluid mx-auto" style="max-height: 60px; max-width: 60px;">
                                </div>
                                <br/><br/><br/><br/>
                                <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 28px;"><a href="" style="color:#0c2e8a"> RESPONSIVE DESIGN</a></h4>
                                <br/><br/><br/>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4">
                        <div class="dontknowthename">
                            <div class="cb-container" >
                                <div clas="icon">
                                    <img src="./final-assets/Mobile Application Development/SEO Friendly - Best Features.png" alt="Avatar" class="overlay-image img-fluid mx-auto" style="max-height: 60px; max-width: 60px;">
                                </div>
                                <br/><br/><br/><br/>
                                <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 28px;"><a href="" style="color:#0c2e8a">SEO FRIENDLY</a></h4>
                                <br/><br/><br/>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4">
                        <div class="dontknowthename">
                            <div class="cb-container" >
                                <div clas="icon">
                                    <img src="./final-assets/Mobile Application Development/Friendly Admin panel - Best Features.png" alt="Avatar" class="overlay-image img-fluid mx-auto" style="max-height: 60px; max-width: 60px;">
                                </div>
                                <br/><br/><br/><br/>
                                <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 28px;"><a href="" style="color:#0c2e8a">FRIENDLY ADMIN PANEL</a></h4>
                                <br/><br/><br/>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-xs-6 col-sm-4">
                        <div class="dontknowthename">
                            <div class="cb-container" >
                                <div clas="icon">
                                    <img src="./final-assets/Mobile Application Development/Friendly Admin panel - Best Features.png" alt="Avatar" class="overlay-image img-fluid mx-auto" style="max-height: 60px; max-width: 60px;">
                                </div>
                                <br/><br/><br/><br/>
                                <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 28px;"><a href="" style="color:#0c2e8a">ANIMATION USAGE</a></h4>
                                <br/><br/><br/>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4">
                        <div class="dontknowthename">
                            <div class="cb-container" >
                                <div clas="icon">
                                    <img src="./final-assets/Mobile Application Development/Fully Customizable - Best Features.png" alt="Avatar" class="overlay-image img-fluid mx-auto" style="max-height: 60px; max-width: 60px;">
                                </div>
                                <br/><br/><br/><br/>
                                <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 28px;"><a href="" style="color:#0c2e8a">FULLY CUSTOMISABLE</a></h4>
                                <br/><br/><br/>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4">
                        <div class="dontknowthename">
                            <div class="cb-container" >
                                <div clas="icon">
                                    <img src="./final-assets/Mobile Application Development/Unique content - Best Features.png" alt="Avatar" class="overlay-image img-fluid mx-auto" style="max-height: 60px; max-width: 60px;">
                                </div>
                                <br/><br/><br/><br/>
                                <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 28px;"><a href="" style="color:#0c2e8a">UNIQUE CONTENT</a></h4>
                                <br/><br/><br/>
                            </div>
                        </div>
                    </div>
                 </div>
                <div class="row">


                                    <div class="col-xs- col-sm-4" >
                        <div class="dontknowthename">
                            <div class="cb-container" >
                                <div clas="icon">
                                    <img src="./final-assets/Mobile Application Development/Unlimited Options - Best Features.png" alt="Avatar" class="overlay-image img-fluid mx-auto" style="max-height: 60px; max-width: 60px;">
                                </div>
                                <br/><br/><br/><br/><br/>
                                <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 28px;"><a href="" style="color:#0c2e8a">UNLIMITED OPTIONS</a></h4>
                                <br/><br/><br/>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4">
                        <div class="dontknowthename">
                            <div class="cb-container" >
                                <div clas="icon">
                                    <img src="./final-assets/Mobile Application Development/Clean Code - best features.png" alt="Avatar" class="overlay-image img-fluid mx-auto" style="max-height: 60px; max-width: 60px;">
                                </div>
                                <br/><br/><br/><br/>
                                <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 28px;"><a href="" style="color:#0c2e8a">CLEAN CODE</a></h4>
                                <br/><br/><br/>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4">
                        <div class="dontknowthename">
                            <div class="cb-container" >
                                <div clas="icon">
                                    <img src="./final-assets/Mobile Application Development/Free Support - Best Features.png" alt="Avatar" class="overlay-image img-fluid mx-auto" style="max-height: 60px; max-width: 60px;">
                                </div>
                                <br/><br/><br/><br/>
                                <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 28px;"><a href="" style="color:#0c2e8a">FREE SUPPORT</a></h4>
                                <br/><br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div style="margin-top: 8vh" class="container">
        <div class="row col-xs-offset-1 col-xs-10 text-justify" style="color: black;">
               <!--  Android is one of the top and fast moving smart phone operating systems which cover almost 75% of mobile market and remains popular with each of its updates. It's versatile, user friendly and flexible - this makes it a favourite among the youth. With the latest and most up-to-date knowledge about Android systems, our expert team invents profitable Android apps. Inesh is a prestigious Android app development company that offers professional Android application development services. Our professional team of Android developers performs a well researched and analyzed app to meet your needs and expectations. With the help of a wide range of tools and technologies, we create customized apps that are powerful and strong for any Android device. We provide international standard app development services globally.

                <br/><br/>While working on the latest gadgets and trends, we ensure our customers exceptional functionality. Our iOS developers are very proud to develop innovative, hassle-free and user-friendly iOS applications.  We deliver customized iOS services that engage a wide range of iOS devices including iPhone, iPad, Apple TV and Apple Watch. We embed latest technologies in iPhone and iPad application development to produce high quality products. -->
                <?php 
                    include("connect.php");
                    $sql = 'SELECT * from `mobile_other`';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo htmlspecialchars_decode($row['content']);
                        }
                    }
                    $conn->close();
                ?>
        </div>
    </div>


    <div class="container" style="margin-top: 8vh">
        <div class="row">
               <div class="col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="./final-assets/Mobile Application Development/nativeiphone.png" width="60px" height="60px" ></div>
                    <br/><br/>
                <h4 class="title" Align="center" style="color:#0c2e8a"><a href="" style="color:#0c2e8a">Native iPhone App Development</a></h4>
                <p class="description" style="padding: 10px!important;"> Developing platform-oriented native iPhone apps to maximize the benefits of features specifically designed for a particular operating system. Using the power of development tools and languages like Xcode, Objective-C and Swift, we develop mobile responsive applications that provide high-user satisfaction. Native apps give the best look and feel because they access a substantial amount of device hardware and make the best use of iOS features too.</p><br/><br/>
              </div>
            </div>  
            <div class="col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1 dontknowthename">
                <div class="cb-container">
                  <div class="icon"><image src="./final-assets/Mobile Application Development/hybridiphone.png" width="60px" height="60px" ></div>
                    <br/><br/>
                  <h4 class="title" Align="center" ><a href=""style="color:#0c2e8a">Hybrid iPhone App Development</a></h4>
                  <p class="description" style="padding: 10px!important;">Inesh develops hybrid applications using customary web technologies such as HTML, CSS, JavaScript, Reactive Native etc., we use the modern versions of technologies to regulate the market's latest drifts in your business project. The best advantage of hybrid app development is that you can code once and use it many times. Hybrid apps are compatible with various platforms.</p>
                  <br/><br/>
                </div>
              </div>
            
        </div>
    </div>
<br/><br/>
    <!-- END SECTION -->
<div id="footer1"></div>
 </div>
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top"><span class="icon fa fa-angle-up"></span></div>

<div class="scroll-to-top scroll-to-target" data-target=".header-top"><span class="icon fa fa-angle-up"></span></div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/html5lightbox.js"></script>
<script src="js/isotope.js"></script> 


<!-- revolution slider js -->
<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>

<script src="js/owl.carousel.min.js"></script>
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>

<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>

<!-- bxslider -->
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.countTo.js"></script>

<script src="js/script.js"></script>
</body>
</html>

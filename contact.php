<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=" Oshaprapra Movies Hub is an online video store,through which you can rent and purchase film and television content.">
        
        <link rel="stylesheet" type="text/css" href="resources/css/bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="resources/css/bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/bootstrap-reboot.css">
        <link rel="stylesheet" type="text/css" href="resources/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <title>Oshaprapra Movies Hub</title>
        
        <script type="text/javascript">
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var strcount
var x = new Date()
document.getElementById('ct').innerHTML = x;
tt=display_c();
}
</script> 
            
        
    </head>
    
    <body onload=display_ct();>
         <?php?>
        <header>
            <time datetime="2016-09-06" class="icon" style="position: absolute; top: 75px;
left: 1075px">
    <span id='ct' ></span>
    </time>
            <nav class="sticky">
                <div class="row">
                    <img src="resources/img/logo.jpg" alt="Oshprapra Movies Hub logo" class="logo">
                    <img src="resources/img/logo.jpg" alt="Oshprapra Movies Hub logo" class="logo-black">
                    <ul class="main-nav js--main-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="gallery.php">Our Gallery</a></li>
                        <li><a href="services.php">How it works</a></li>
                        <li><a href="contact.php">Sign up</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>
            <div><img width="1400" height="450" src="resources/img/home4.jpg"> </div> 
        </header>
        
        
        <section class="section-form">
            <div id="contact" class="row">
                <h2 class="animation">We're happy to hear from you</h2>
            </div>
            <div class="row">
                <form name="contact" method="POST">
<label>First Name:</label><input name="FirstName" type="text" autofocus maxlength="25" validation="required" required><br></br>
<label>Last Name:</label><input name="LastName" type="text" maxlength="25" validation="required" required><br></br>
    <label>Address</label> <input name="Address" type="text" validation="required" required><br></br>
    <label>Street</label> <input name="Address" type="text" validation="required" required><br></br>
    <label>City</label> <input name="Address" type="text" validation="required" required><br></br>
       <label>State</label> <input name="Address" type="text" validation="required" required><br></br>
    <label>Email:</label><input name="email" type="email" validation= "email" required id="email To"><br></br>
    <label>Phone Number</label><input type="number" validation="required" required><br></br>

<label>When Are You Signing Up?:</label><input name="contactDate" validation="required" type="date"><br></br>
<label>Is this your first time here?</label><br>Yes <input type= "radio"><br></br> No <input type="radio" checked> <br>
<label>If No, then rate our Services:</label><input id="Slider" name="slidervalue" type="range" min="1" max="10" value="10">
<output name="rateourservice" value="10"onforminput="value=slidervalue.value">10</output><br/><br/>
    <p> Thank You!</p>
    <div class="submit-area">
    <input value="Submit" type="submit"/>
    <script>
var thisForm = $(“contact”);
thisForm.validation();
</script>
                
            </div>
        </section>

        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="gallery.php">Our Gallery</a></li>
                        <li><a href="services.php">Our Services</a></li>
                        <li><a href="contact.php">Contact Us</a></li><label >Stay Connected</label><input name="email" type="email" validation= "email" required id="email To"><input value="Subscribe" type="submit"/>
                    </ul>
                    
                </div>
                
                                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div>
                </div>
            
            <div class="row">
                <p>
                    Copyright &copy; 2018 <a href="http://www.izienatane.com"> Izien Atane </a> &trade; &reg; All Rights Reserved.
                </p>
            </div>
        </footer>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>
    
    
     <?php?>
    </body>  
    
</html>
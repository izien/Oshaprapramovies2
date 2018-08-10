<?php 

// Start the session 
session_start();

// include database connection
include 'config/database.php';

if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) ){
    try{
        
        // insert query 
        $query = "INSERT INTO users SET name=:name, email=:email, password=:password, created_at=:created_at";
        
        // prepare query for execution 
        $stmt = $connection->prepare($query);
        
        // posted values
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        //bind the parameters 
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', hash('sha256', $password));
        $stmt->bindParam(':created_at', date('Y-m-d H:i:s'));
        
        // Execute the query
        if($stmt->execute()){
            
            $_SESSION['name'] = $name;
            header( "Location: index.php");
            exit();
            
        }else{
            echo "<div class='alert alert-danger'>Unable to save record.</div>";
        }
        
    }
    
    // show error 
catch(PDOException $exception){
    die('ERROR: ' . $exception->getmessage());
}
    
}

?>


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
                 <header>
            <time datetime="2016-09-06" class="icon" style="position: absolute; top: 75px;
left: 1075px">
    <span id='ct' ></span>
    </time>
             
        </header>
        
        <section >
            <div class="container" align="center">
                <h1>Register</h1>
                </div>
            
            <div class="container">
                <form action="register.php" method="POST">
                    <label for="text">First Name</label>
                    <input type="text" id="text" name="name" required><br>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required><br>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required><br>
                    
                    
                <input type="submit" value="Submit">
                </form>
                <br>
                <p>I have an account?<a href="login.php">Login</a></p>
            </div>
            </section>
        
    
    </body>  
    
</html>


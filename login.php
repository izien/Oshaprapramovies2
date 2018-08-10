<?php 

// Start the session 
session_start();

// include database connection 
include 'config/database.php';

if( isset($_POST['email']) && isset($_POST['password']) ){
    try{ 
    
         // select all data 
        $query = "SELECT name FROM users WHERE email=:email AND password=:password"; 
        $stmt = $connection->prepare($query);
        
        // bind the parameters 
        $email = $_POST['email'];
        $password = hash('sha256', $_POST['password']);
        
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        
        // this is how to get number of rows returned
        $num = $stmt->rowcount();
        
        if($num>0){
            $row = $stmt->fetch();
            $_SESSION['name'] = $row['name'];
            header("Location: index.php");
            exit();
            }
        
      
    }
    
    // show error 
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
        }
}

else {
    
    session_destroy();
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
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required><br>
                    
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required><br>
                    
                <input type="submit" value="Submit">
                </form>
                <br>
                <p>Don't have an account?<a href="register.php">Register</a></p>
            </div>
            </section>
        
    
    </body>  
    
</html>
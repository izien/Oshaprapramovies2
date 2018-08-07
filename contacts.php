<?php if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) ): ?>
<?php
//IMPORT YOUR CLASS HERE 
include "classes/contact.php";

//EXECUTE WITH THE CUSTOM STATIC FUNCTION 
contact::process($_POST);

?>

<div class="container" align="center">
    <h1> Thank You for Contacting Us! </h1>
    <p> An email has been forwarded to you.</p>
    <a href="contact.php">Contact Us</a>
</div>

<?php else: ?> 
<div class="container">
    <h1>Contact Us</h1>
    <form action="contact.php" method="POST">
        <label for="name">NAME</label>
        <input type="text" id="name" name="name" placeholder="Full Name" required>
        <label for="email">EMAIL</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address"> 
        <label for="message">MESSAGE</label>
        <textarea id="message" name="message" rows="5"></textarea>
        <input type="submit" value="submit">
    </form>
</div>
<?php endif; ?>
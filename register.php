<h2>
    <center>
        Register
    </center>
</h2>


<form method= "post" action = "checklogin.php" enctype= "multipart/form-data">
<center>
    Email :
    <input name = "email" type = "email"/><br/><br/>
    Phone Number :
    <input name = "phone no." type = "phone"/><br/><br/>
    Gender :
    <input name = "gender" type = "radio" value = "Men"/> Men  
    <input name = "gender" type = "radio" value = "Women"/> Women<br/><br/> 
    Address :
    <textarea name = "address"></textarea><br/><br/>
    Insert Picture:
    <input name = "picture" type = "file"/><br/><br/>
    Username :
    <input name = "username" type = "text"/><br/><br/>
    Password :
    <input pass = "password" type = "password"/><br/><br/>
    Verify Password :
    <input pass = "password" type = "password"/><br/><br/>
    <input type = "submit" value = "Register"/>
<center>
</form>

<?php
echo "<br/><br/><center><a href= 'index.php'> Back to Website </center></a>";


?>
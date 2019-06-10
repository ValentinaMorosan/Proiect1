<?php
setcookie("test_cookie", "test", time() + 3600, '/');
echo"Acest site contine cookie-uri. Sunteti de acord?";
?>
<html lang="en">
    <form action="despre.php" method="post" target="_self">
        
        <input type="submit" name="da" value="DA"><br>
</form>
    <form action="index.php" method="post" target="_blank">
        <input type="submit" name="nu" value="NU" ><br>
        
    </form>
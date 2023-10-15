<!DOCTYPE html>
<html lang="en">
<?php

	$db=mysqli_connect("localhost","root","","sparks_bank");  
					
    if($db == false)
    {
        echo "Failed to Connect to the Database...try again";
    }
?>
</html>
<html>
<?php

  $name = $_POST["name"];
  $expiryDate = $_POST["expiry-date"];
  $quantity = $_POST["quantity"];

 
  $file = fopen("food-donations.txt", "a+");
  fwrite($file, "$name,$expiryDate,$quantity\n");
  fclose($file);

?>
</html>

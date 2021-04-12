<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$_SESSION["name"] = "Rajan";
$_SESSION["email"] = "Example25@gmail.com";
echo $_SESSION["name"];
?>
</body>
</html>
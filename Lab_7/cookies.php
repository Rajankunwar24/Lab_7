  
<?php
$name = "Rajan";
$email = "example24.com";
setcookie($name, $email, time() + (86400 * 30));
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$name])) {
  echo 'cookie name notset';
} else {
  echo "cookie name" . $_COOKIE[$name];
}
?>

</body>
</html>
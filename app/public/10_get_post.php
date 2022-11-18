<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
$name = $_GET['name'] ?? null;
echo '<br/>' . $_GET['name'];
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Hillary">Click</a>
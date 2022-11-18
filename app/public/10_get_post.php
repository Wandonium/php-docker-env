<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
// echo '<br/>' . $_GET['name'];
// echo '<br/>' . $_GET['age'];
if(isset($_POST['submit'])) {
  echo '<br/>' . $_POST['name'];
  echo '<br/>' . $_POST['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Hillary&age=29">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
    <label for="name">Name: </label>
    <input type="text" name="name" />
  </div>
  <div>
    <label for="age">Age: </label>
    <input type="text" name="age" />
  </div>
  <input type="submit" value="Submit" name="submit"/>
</form>

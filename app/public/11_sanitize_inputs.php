<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
// echo '<br/>' . $_GET['name'];
// echo '<br/>' . $_GET['age'];
if(isset($_POST['submit'])) {
//   $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
//   $age = htmlspecialchars('<br/>' . $_POST['age']);
    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name;
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
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

<?php

if (isset($_POST['submit'])) {
  require "../config.php";
  require "../common.php";

  try {
    $connection = new PDO($dsn, $username, $password, $options);

$new_user = array(
  "firstname" => $_POST['firstname'],
  "lastname"  => $_POST['lastname'],
  "email"     => $_POST['email'],
  "password"  => $_POST['password']
);

$sql = sprintf(
    "INSERT INTO %s (%s) values (%s)",
    "users",
    implode(", ", array_keys($new_user)),
    ":" . implode(", :", array_keys($new_user))
);

$statement = $connection->prepare($sql);
$statement->execute($new_user);

  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }

}

?>

<?php include "templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) { ?>
  <?php echo escape($_POST['firstname']); ?> successfully added.
<?php } ?>

<h2>Add a user</h2>

<form method="post">
    <div class="input-group">
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname">
    </div>
    <div class="input-group">
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname">
    </div>
    <div class="input-group">
        <label for="email">Email Address</label>
        <input type="text" name="email" id="email">
    </div>
    <div class="input-group">
        <label for="email">Password</label>
        <input type="text" name="password" id="password">
    </div>
    <div class="input-group">
        <input class="btn" type="submit" name="submit" value="Submit">
    </div>
</form>

<a href="../index.php">Back to home</a>

<?php include "templates/footer.php"; ?>
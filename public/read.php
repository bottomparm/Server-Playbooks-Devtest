<?php

if (isset($_POST['submit'])) {
    try {
        require "../config.php";
        require "../common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT *
FROM users
WHERE email = :email";

        $email = $_POST['email'];

        $statement = $connection->prepare($sql);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->execute();

        $result = $statement->fetchAll();
    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>


<?php include "templates/header.php"; ?>

<?php
if (isset($_POST['submit'])) {
    if ($result && $statement->rowCount() > 0) { ?>
<h2>Results</h2>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email Address</th>
            <th>Password</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $row) { ?>
        <tr>
            <td><?php echo escape($row["id"]); ?></td>
            <td><?php echo escape($row["firstname"]); ?></td>
            <td><?php echo escape($row["lastname"]); ?></td>
            <td><?php echo escape($row["email"]); ?></td>
            <td><?php echo escape($row["password"]); ?></td>
            <td><?php echo escape($row["date"]); ?> </td>
        </tr>
        <?php 
    } ?>
    </tbody>
</table>
<?php 
} else { ?>
> No results found for <?php echo escape($_POST['email']); ?>.
<?php 
}
} ?>


<h2>Find user by email</h2>

<form method="post">
    <div class="input-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
    </div>
    <div class="input-group">
        <input type="submit" name="submit" value="View Results">
    </div>
</form>

<a href="../index.php">Back to home</a>

<?php include "templates/footer.php"; ?> 
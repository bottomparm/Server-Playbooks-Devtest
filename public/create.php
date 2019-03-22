<?php include "templates/header.php"; ?><h2>Add a user</h2>

<form method="post">
    <div class="input-group">
        <label for="firstname">First Name</label>
        <input type="text" name="firstName" id="firstname">
    </div>
    <div class="input-group">
        <label for="lastname">Last Name</label>
        <input type="text" name="lastName" id="lastname">
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
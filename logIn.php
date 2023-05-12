<?php
/**  @var $conn */

if (isset($_POST['login'])) {
    $username = sanitiseData($_POST['username']);
    $password = sanitiseData($_POST['password']);

    $query = $conn->query("SELECT COUNT(*) as count, * FROM Customers WHERE `email`='$username'");
    $row = $query->fetchArray();
    $count = $row['count'];

    if ($count > 0) {
        if (password_verify($password, $row['Hashedpassword'])) {
            $_SESSION["firstName"] = $row['firstName'];
            $_SESSION['email'] = $row['email'];
            header("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>Invalid username or password</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Invalid username or password</div>";
    }
}
    ?>
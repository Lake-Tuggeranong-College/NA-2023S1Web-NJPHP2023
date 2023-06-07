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
            $_SESSION['firstName'] = $row['firstName'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['AccessLevel'] = $row['AccessLevel'];
            $_SESSION['custID'] = $row ['custID'];
            $_SESSION["flash_message"] = "<div class='dg-danger'>Login Successful</div>";
            header("location:index.php");
        }else{
            echo "<div class='alert alert-danger'>Invalid Email or Password</div>";
            $_SESSION["flash_message"] = "<div class='dg-danger'>Invalid Email or Password</div>";
            header("location:index.php");
        }
    }else{
        echo "<div class='alert alert-danger'>Invalid Email or Password</div>";
    }
}
    ?>
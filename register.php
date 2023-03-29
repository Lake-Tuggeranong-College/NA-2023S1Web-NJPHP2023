<?php include "template.php";
/** @var $conn */
?>
<title>User Registration</title>
<h1 class='text-primary'>User Registration</h1>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    <div class="container-fluid">
        <div class="row">
            <!--Customer Details-->

            <div class="col-md-6">
                <h2>Account Details</h2>
                <p>Please enter wanted username and password:</p>
                <p>Email Address<input type="text" name="username" class="form-control" required="required"></p>
                <p>Password<input type="password" name="password" class="form-control" required="required"></p>

            </div>
            <div class="col-md-6">
                <h2>More Details</h2>
                <!--Product List-->
                <p>Please enter More Personal Details:</p>
                <p>First Name<input type="text" name="firstName" class="form-control" required="required"></p>
                <p>Seccond Name<input type="text" name="seccondName" class="form-control" required="required"></p>
                <p>Adress<input type="text" name="Adress" class="form-control" required="required"></p>
                <p>Phone Number<input type="text" name="PhoneNumber" class="form-control" required="required"></p>
            </div>
        </div>
    </div>
    <input type="submit" name="formSubmit" value="Submit">
</form>

<?php
//back end
if ($_SERVER["REQUEST_METHOD"] == 'POST') { // will return true when the user presses the submit button.
    $userName = sanitiseData($_POST['username']);
    $password = sanitiseData($_POST['password']);
    $firstName = sanitiseData($_POST['firstName']);
    $seccondName = sanitiseData($_POST['seccondName']);
    $adress = sanitiseData($_POST['Adress']);
    $phoneNumber = sanitiseData($_POST['PhoneNumber']);

    //check if username alredy exist in the database.
    $query = $conn->query("SELECT COUNT(*) FROM Customers WHERE email='$userName'");
    $data = $query->fetchArray();
    $numberOfUsers = (int)$data[0];

    if ($numberOfUsers > 0){
        echo "sorry, that email alredy exists";
    } else {
        // the username is not in use (it dosent exist).
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $SQLstmt = $conn->prepare("INSERT INTO Customers (email, Hashedpassword, firstName, seccondName, adress, phoneNumber) VALUES (:email, :Hashedpassword, :firstname, :seccondName, :adress, :phoneNumber)");
        $SQLstmt->bindParam(':email', $userName);
        $SQLstmt->bindParam(':Hashedpassword', $hashedPassword);
        $SQLstmt->bindParam(':seccondName', $seccondName);
        $SQLstmt->bindParam(':firstname', $firstName);
        $SQLstmt->bindParam(':adress', $adress);
        $SQLstmt->bindParam(':phoneNumber', $phoneNumber);
        $SQLstmt->execute();
    }
}
?>
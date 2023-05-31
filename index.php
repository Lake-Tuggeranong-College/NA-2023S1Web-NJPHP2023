<?php include "template.php"?>
<?php include "logIn.php"?>

    <title>PHP Template</title>
<body>
<h1><em>Starwars Comics.store</em></h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <p>username: exemple@email.com</p>
            <p>Password: Password</p>
            <p>username: Obi@wan.com</p>
            <p>Password: Luke</p>
        </div>
        <div class="col-6">
            <?php if (!isset($_SESSION["email"])) : ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required="required"/>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required="required"/>
                    </div>

                    <div class="text-center">
                        <button name="login" class="btn btn-primary">Login</button>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php echo footer() ?>
</body>

</html>
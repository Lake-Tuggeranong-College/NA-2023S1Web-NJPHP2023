<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<nav class="navbar navbar-expand-sm bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php" ><img rel="home logo" src="https://cdn.vox-cdn.com/thumbor/c10T0UF5wEfiZgCai7oc5-bnMY0=/0x0:1280x720/2150x1209/filters:focal(470x259:674x463):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/58089103/r_m_sauce.0.jpg" height="100px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="contact.php">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hello.php" target="_blank">hello</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orderForm.php" >Order Form</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="invoice.php" >Invoice</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php

function footer():string {
    date_default_timezone_set('Australia/Canberra');
    $filename = basename($_SERVER["SCRIPT_FILENAME"]);
    $footer = "This page was last modified: " . date( "F d Y H:i:s.", filemtime($filename));
    return $footer;
}

function sanitiseData($unsanitisedData) {
    $unsanitisedData = trim($unsanitisedData);
    $unsanitisedData = stripslashes($unsanitisedData);
    $sanitisedData = htmlspecialchars($unsanitisedData);
    return $sanitisedData;
}

?>
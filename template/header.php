<?php

session_start();


// //delete session
// // unset($_SESSION['name']);



$myName =   isset($_SESSION['name'])  ? ($_SESSION['name'] ==  '' ? 'Guest' : $_SESSION['name']) : "Guest";

$gender =   isset($_COOKIE['gender'])  ? ($_COOKIE['gender'] ==  '' ? 'unknown' : $_COOKIE['gender']) : "unknown";

echo  $_COOKIE['gender'];

?>



<head>
    <title>OpenCode Pizza</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style>
        .brand {
            background: #cbb09c !important;
        }

        .brand-text {
            color: #cbb09c !important;
        }

        form {
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
    </style>
</head>

<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text">OpenCode Pizaa</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li><a href="add.php" class="btn brand z-depth-0"><?php echo htmlspecialchars($myName);  ?></a></li>
                <li><a href="add.php" class="btn  z-depth-0"><?php echo htmlspecialchars($gender);  ?></a></li>
                <li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
            </ul>
        </div>
    </nav>
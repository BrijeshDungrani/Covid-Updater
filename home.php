<html>

<head>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="reset.css" type="text/css" />
    <title>Welcome</title>
</head>

<body>
    <header>
        <?php session_start();
if(!isset($_SESSION['username']))
header('location:http://localhost/cv/index.php');
?>
        <style>
        body {
            background-image: url('img/hospBg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        </style>
        <center>
            <h1>Regional covid-19 Updater</h1>
        </center>
    </header>
    <nav>
        <ul>

            <li><a href="Addhospital.html">Add New hospital </a></li>
            <li><a href="updatedata.php">Update Hospital Data </a></li>
            <li><a href="CaseData.html">Add Today's Cases</a></li>
            <li><a href="logout.php">Logout </a></li>

        </ul>
    </nav>
    <br />

</body>

</html>
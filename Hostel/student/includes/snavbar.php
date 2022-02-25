<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="../css/w3.css">
    <style type="text/css">
    #{
        padding:0px;
        margin:0px;
    }

    #navbar{
        width:100%;
        background-color:blue;
    }
    #navbar ul {
        list-style-type:none;
        text-align:center;
    }
    #navbar li{
        display:inline-block;
        padding:10px;
        color:red;
    }
    
    </style>
</head>
<body>
    <div id="navbar">
    
    <ul>
        <li><a href="Index.php">User Login</a></li>
        <li><a href="userregis.php">User Registration</a></li>
        <li><a href="adminlog.php">Admin Login</a></li>
    
    </ul>
    </div>
</body>
</html>
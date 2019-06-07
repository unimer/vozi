<html>
    <head>
</head>
<body>
    <?php
    $dbconnect=mysqli_connect("localhost","root","","vozi");
    if(mysqli_connect_errno($dbconnect)) {
        echo "failed to connect";
    }
    else  { echo "connection successful";} ?>
    }
</body>
    </html>
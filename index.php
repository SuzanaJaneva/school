<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Index</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <?php
        include 'config.php';

        $sql = "Select * from students";

        $result = $mysqli->query($sql);

        displayStudents($result);
       

        function displayStudents($result) {
            while ($row = @mysqli_fetch_row($result)) {
                echo "<div> Name: " . $row[1] . "<hr></div>";
            }
        }
        ?>
        
    </body>
</html>
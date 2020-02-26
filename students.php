<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Students</title>
        <?php
            include 'config.php';

            $sql = "Select * from students";
            $result = $mysqli->query($sql);

            displayStudents($result);

            function displayStudents($result) {
                while ($row = @mysqli_fetch_row($result)) {
                    echo "<div> Name:<a href=students/".$row[0].">". $row[1] . "</a><hr></div>";
                }
            }
        ?>

<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Students</title>
        <?php
            include 'config.php';

            if (!isset($_GET['id'])) {
                die("You must use id in this format: http://localhost/school/students.php/?id=1");
            } else {
                $id = trim($_GET['id']);
            }
            
            $sql = "SELECT * from students WHERE id=".$id; 

            $result = $mysqli->query($sql);
            
            displayStudents($result);

            function displayStudents($result) {
                $array_value = array();
                $row = mysqli_fetch_row($result);
                echo json_encode($row);
            }
            
        ?>

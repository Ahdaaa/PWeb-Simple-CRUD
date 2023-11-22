<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Action</title>
</head>
<body>
    <?php
        require_once("config.php");

        if (isset($_POST['submitdata'])) {
            $name = mysqli_real_escape_string($mysqli, $_POST['name']);
            $age = mysqli_real_escape_string($mysqli, $_POST['age']);
            $email = mysqli_real_escape_string($mysqli, $_POST['email']);

            if (empty($name) || empty($age) || empty($email)) {
                if (empty($name)){
                    echo "<font color='red'>Name field is empty.</font><br/>";
                }

                if (empty($age)){
                    echo "<font color='red'>Age field is empty.</font><br/>";
                }

                if (empty($email)){
                    echo "<font color='red'>Email field is empty.</font><br/>";
                }

                echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
            }  else {
                $result = mysqli_query($mysqli, "INSERT INTO users (`name`, `age`, `email`) VALUES ('$name', '$age', '$email')");

                echo "<p><font color='green'>Data added successfully!</p>";
                echo "<a href='index.php'>View Result</a>";
            }
        }
    ?>
</body>
</html>
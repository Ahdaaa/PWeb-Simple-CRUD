<?php
// Include the database connection file
require_once("config.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$age = $resultData['age'];
$email = $resultData['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>

    <link rel="stylesheet" href="./src/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
</head>
<body>
    <main class="d-flex align-items-center justify-content-center h-100">
        <section class="main-cont d-flex flex-column rounded-3 justify-content-center">
            <h1 class="text-center text-dark" style="font-weight:500;">Edit Your Data!</h1>

            <a class="text-center text-dark" href="index.php">Go home</a>
        
            <form action="editAction.php" method="POST" name="edit">
                
                <fieldset class="d-flex flex-column gap-1">
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" value="<?php echo $name; ?>">
                    </div>

                    <div>
                        <label for="age">Age:</label>
                        <input type="text" name="age" id="age" value="<?php echo $age; ?>">
                    </div>

                    <div>
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" value="<?php echo $email; ?>">
                    </div>
                
                    <input type="hidden" name="id" value=<?php echo $id; ?>>

                    <input class="btn-custom mt-5 rounded-pill" type="submit" name="updatedata" value="update">

                </fieldset>

            </form>

        </section>

    </main>
</body>
</html>
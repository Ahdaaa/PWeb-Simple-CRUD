<?php
    require_once("config.php");

    $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="stylesheet" href="./src/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
</head>
<body>
    <main class="d-flex align-items-center justify-content-center">
        <section class="main-cont d-flex flex-column rounded-3 justify-content-center">
            <h1 class="text-center text-dark">Homepage</h1>
            <a class="text-center text-dark" href="add.php">Add new data</a>

            <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($res = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$res['name']."</td>";
                        echo "<td>".$res['age']."</td>";
                        echo "<td>".$res['email']."</td>";
                        echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> |
                                <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                    }
                ?>
            </tbody>
            </table>

        </section>
    </main>
</body>
</html>
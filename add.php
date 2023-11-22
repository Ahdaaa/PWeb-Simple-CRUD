<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Page</title>

    <link rel="stylesheet" href="./src/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
</head>
<body>
    <main class="d-flex align-items-center justify-content-center h-100">
        <section class="main-cont d-flex flex-column rounded-3 justify-content-center">
            <h1 class="text-center text-dark" style="font-weight:500;">Add Your Data!</h1>

            <a class="text-center text-dark" href="index.php">Go home</a>
        
            <form action="addAction.php" method="POST" name="add">
                
                <fieldset class="d-flex flex-column gap-1">
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" placeholder="insert your name">
                    </div>

                    <div>
                        <label for="age">Age:</label>
                        <input type="text" name="age" id="age" placeholder="insert your age">
                    </div>

                    <div>
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" placeholder="insert your email">
                    </div>

                    <input class="btn-custom mt-5 rounded-pill" type="submit" name="submitdata" value="Add">

                </fieldset>

            </form>

        </section>

    </main>
</body>
</html>
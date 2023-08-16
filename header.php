<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tariq</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    
    <header>
        <nav class="navbar navbar-expand-sm bg-light">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <img src="img/logo.png" width="40px" alt="logo">
                    </a>
                </div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item "><a class="nav-link" href="#">Poftfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About me</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
                <div class="navbar-nav mr-auto">
                    <?php
                        if (isset($_SESSION['userId'])) {
                            echo '<form action="includes/logout.inc.php" method="post">
                            <button class="px-4 btn btn-outline-danger my-2 my-sm-0" type="submit" name="logout-submit">Logout</button>
                            </form>';
                        }
                        else {
                            echo '<form class="navbar-nav mr-auto" action="includes/login.inc.php" method="post">
                            <input class="form-control" type="text" name="mailuid" placeholder="Username...">
                            <input class="mx-2 form-control" type="password" name="pwd" placeholder="Password...">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="login-submit">Login</button>
                            </form>
                            <a class="mx-2 btn btn-outline-primary my-2 my-sm-0" href="signup.php?signup=""">Sign Up</a>';
                        }
                    ?>
                    
                    
                </div>
            </div>
        </nav>
    </header>
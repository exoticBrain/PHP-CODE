<?php
    require "header.php";
?>

    <main>
        <div class="crow h-100">
            <section class="ol-sm-12 my-auto">
            <div class="w-25 mx-auto">
                <h1 class="mt-5 d-flex justify-content-center">Sign up</h1>
                    <?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "emptyfields") {
                                echo '<p class="mt-5 d-flex justify-content-center text-danger">Fill in all fields!</p>';
                            }
                            elseif ($_GET['error'] == "invaliduidmail") {
                                echo '<p class="mt-5 d-flex justify-content-center text-danger">Invalid username and e-mail!</p>';
                            }
                            elseif ($_GET['error'] == "invaliduid") {
                                echo '<p class="mt-5 d-flex justify-content-center text-danger">Invalid username!</p>';
                            }
                            elseif ($_GET['error'] == "invalidmail") {
                                echo '<p class="mt-5 d-flex justify-content-center text-danger">Invalid e-mail!</p>';
                            }
                            elseif ($_GET['error'] == "passwordcheck") {
                                echo '<p class="mt-5 d-flex justify-content-center text-danger">Your password do not match!</p>';
                            }
                            elseif ($_GET['error'] == "usertaken") {
                                echo '<p class="mt-5 d-flex justify-content-center text-danger">Username is already taken!</p>';
                            }
                        }
                        elseif ($_GET['signup'] == "success") {
                            echo '<p class="mt-5 d-flex justify-content-center text-success">Sign Up successful!</p><br>';
                        }
                    ?>
                    <form class="navbar-nav " action="includes/signup.inc.php" method="post">
                        <?php
                            if ($_GET['signup'] == "success") {
                                echo '<a class="btn btn-outline-primary my-2 my-sm-0" href="index.php?signup="success"">Go Back</a>';
                            }
                            else {
                                echo '<input class="form-control" type="text" name="uid" placeholder="Username">
                                        <input class="mt-2 form-control" type="text" name="mail" placeholder="E-mail">
                                        <input class="mt-2 form-control" type="password" name="pwd" placeholder="Password">
                                        <input class="mt-2 form-control" type="password" name="pwd-repeat" placeholder="Repeat Password">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="signup-submit">Sign Up</button>';
                            }
                        ?>
                    </form>
                </div>
            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>
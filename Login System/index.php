<?php
    require "header.php";
?>

    <main>
        <div class="container mt-3 mx-auto">
            <section class="d-flex justify-content-center">
                <?php
                    if (isset($_SESSION['userId'])) {
                        header("Location: userin.php");
                        exit();
                    }
                    else {
                        header("Location: userout.php");
                    }
                ?>
            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>
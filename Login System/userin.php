<?php
    require "header.php";
?>

    <main>
        <div class="mt-3">
            <section class="d-flex justify-content-center">
                <div class="has-bg-img">
                    <h2>Hello <?php echo $_SESSION['userUid'] ?>!</h2>
                    <h4 class="text-success">You are logged In!</h4>
                    <img src="img/logo.jpg" width="720px" alt="logo">
                </div>'; 
            </section>
            <section class="d-flex justify-content-center">
                <div class="has-bg-img">
                    <h4 class="text-dark">Hope you like our Cars!</h4>
                    <img src="img/passat.jpg" width="720px" alt="logo">
                </div>'; 
            </section>
            <section class="d-flex justify-content-start">
                <div class="has-bg-img">
                    <img src="img/passat2.jpg" width="720px" alt="logo">
                </div>'; 
            </section>
            <section class="d-flex justify-content-end">
                <div class="has-bg-img">
                    <img src="img/golf.jpg" width="720px" alt="logo">
                </div>'; 
            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>
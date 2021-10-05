<?php include_once 'header.php'; ?>

            <section>
                <div class="signup-form">
                    <h2>Log In</h2>
                    <form class="signup-form-form" action="includes/login.inc.php" method="post">
                        <input type="text" name="userid" placeholder="Username/Email...">
                        <input type="password" name="pwd" placeholder="Password...">
                        <button type="submit" name="submit" class="button-register">Log In</button>
                        <?php 

                            if (isset($_GET["error"])) {
                                if ($_GET["error"] == "emptyInput") {
                                    echo "<p>Fill all fields!</p>";
                                }
                                elseif ($_GET["error"] == "wrongLogin") {
                                    echo "<p>Invalid Log-In information!</p>";
                                }
                            }?>
                    </form>
                </div>    
            </section>

<!-- Error handlers -->


<?php include_once 'footer.php'; ?>
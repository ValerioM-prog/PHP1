<?php include_once 'header.php'; ?>

            <section>
                <div class="signup-form">
                    <h2>Sign Up</h2>
                    <form class="signup-form" action="includes/signup.inc.php" method="post">
                        <input type="text" name="name" placeholder="Name...">
                        <input type="text" name="surname" placeholder="Surname...">
                        <input type="text" name="userid" placeholder="Username...">
                        <input type="text" name="email" placeholder="Email...">
                        <input type="password" name="pwd" placeholder="Password...">
                        <input type="password" name="pwdRepeat" placeholder="Repeat password...">
                        <button type="submit" name="submit" class="button-register">Register</button>
                        <?php 

                            if (isset($_GET["error"])) {
                                if ($_GET["error"] == "emptyInput") {
                                    echo "<p>Fill all fields!</p>";
                                }
                                elseif ($_GET["error"] == "invalidUid") {
                                    echo "<p>Choose a proper username!</p>";
                                }
                                elseif ($_GET["error"] == "invalidEmail") {
                                    echo "<p>Enter a valid Email address!</p>";
                                }
                                elseif ($_GET["error"] == "passwordsDontMatch") {
                                    echo "<p>Passwords do not match!</p>";
                                }
                                elseif ($_GET["error"] == "usernameTaken") {
                                    echo "<p>Username is already taken!</p>";
                                }
                                elseif ($_GET["error"] == "stmtFailed") {
                                    echo "<p>Something went wrong, please try again!</p>";
                                }
                                elseif ($_GET["error"] == "none") {
                                    echo "<p>Sign-up successful!</p>";
                                }
                            }?>
                    </form>
                </div>  
                
                <!-- Error handlers -->

                
            </section>






<?php include_once 'footer.php'; ?>
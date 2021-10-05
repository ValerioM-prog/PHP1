<?php include_once 'header.php'; ?>
        <section>
            <?php
                if (isset($_SESSION["usersUid"])) {
                    echo "<p>Hello there " . $_SESSION["usersUid"] . "</p>";
                }
                ?>
            <div class="home">
                <div class="filter">Filter section

                    In publishing and graphic design,<br>
                    Lorem ipsum is a placeholder text <br>
                    commonly used to demonstrate the <br>
                    visual form of a document or a <br>
                    typeface without relying on meaningful<br>
                    content. Lorem ipsum may be used as a <br>
                    placeholder before final copy is available.
                </div>
                <div class="products">Products section

                    In publishing and graphic design,
                    Lorem ipsum is a placeholder text <br>
                    commonly used to demonstrate the 
                    visual form of a document or a <br>
                    typeface without relying on meaningful
                    content. Lorem ipsum may be used as a <br>
                    placeholder before final copy is available.
                </div>
                <div class="cart">Cart section

                    In publishing and graphic design,<br>
                    Lorem ipsum is a placeholder text <br>
                    commonly used to demonstrate the <br>
                    visual form of a document or a <br>
                    typeface without relying on meaningful<br>
                    content. Lorem ipsum may be used as a <br>
                    placeholder before final copy is available.
                </div>
            </div>
        </section>   

<?php include_once 'footer.php'; ?>
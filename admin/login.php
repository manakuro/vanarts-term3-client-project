<?php include "header.php"; ?>
    
    <main class="page-main">

        <section class="sec sec-login sec-form">
            
            <div class="row row-center">

            <?php if (!empty($_SESSION['is_login_error'])): ?>
                <div class="span-6 columns">
                    <p class="error-msg">Username or Password is wrong. Please try again.</p>
                </div>
            <?php endif; ?>

                <div class="span-6 columns">

                    <form id="login-form" name="login-form" method="post" action="login_process.php">
                    
                        <ul>
                            <li>
                                <div class="input-wrapper">
                                    <span class="label-span">Username</span>
                                    <input class="input" type="text" value="" name="username">
                                </div>
                            </li>

                            <li>
                                <div class="input-wrapper">
                                    <span class="label-span">Password</span>
                                    <input class="input" type="password" value="" name="password">
                                </div>
                            </li>

                            <li>
                                <div class="input-wrapper input-wrapper-btn">
                                    <input type="submit" class="btn" name="login" value="login">
                                </div>                              
                            </li>

                        </ul>

                    </form>

                </div>

            </div>

            

            

        </section><!-- end of section-stylists -->

    </main><!-- end of page-main -->

<?php include "footer.php"; ?>
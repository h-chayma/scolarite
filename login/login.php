<div class="account-area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="account-wrap">
                    <div class="account-top">
                        <div class="account-top-link">
                            <a href="../register/main.php">Sign Up</a>
                        </div>
                        <div class="account-top-current">
                            <span>Se connecter</span>
                        </div>
                    </div>
                    <div class="account-main">
                        <h3 class="account-title">Connectez-vous à votre compte 👋</h3>
                        <?php
                                if (isset($_GET['error'])) {
                                    $error = $_GET['error'];
                                    if ($error === 'invalid_credentials') {
                                        echo '<div class="alert alert-danger">invalid_credentials</div>';
                                    }
                                }
                                ?>
                        <form action="signin.php" method="post" class="account-form">
                            <div class="account-form-item mb-20">
                                <div class="account-form-label">
                                    <label>Numéro CIN</label>
                                </div>
                                <div class="account-form-input">
                                    <input type="text" name="cin" placeholder="Saisir votre cin" required>
                                </div>
                            </div>
                            <div class="account-form-item mb-15">
                                <div class="account-form-label">
                                    <label>Votre mot de Passe</label>
                                    <a href="#">Mot de passe oublié ?</a>
                                </div>
                                <div class="account-form-input account-form-input-pass">
                                    <input type="password" name="password" placeholder="*********" required>
                                    <span><i class="fa-thin fa-eye"></i></span>
                                </div>
                            </div>
                            <div class="account-form-button">
                                <button type="submit" name="submit" class="account-btn">Se connecter</button>
                            </div>
                        </form>
                        <div class="account-break">
                            <span>OR</span>
                        </div>
                        <div class="account-bottom">
                            <div class="account-option">
                                <a href="#" class="account-option-account">
                                    <img src="assets/img/bg/google.png" alt="">
                                    <span>Google</span>
                                </a>
                                <a href="#" class="account-option-account">
                                    <img src="assets/img/bg/apple.png" alt="">
                                    <span>Apple</span>
                                </a>
                                <a href="#" class="account-option-account">
                                    <img src="assets/img/bg/facebook.png" alt="">
                                    <span>Facebook</span>
                                </a>
                            </div>
                            <div class="account-bottom-text">
                                <p>Vous n'avez pas de compte ? <a href="sign-up.html">Inscrivez-vous ici</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
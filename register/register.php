<div class="account-area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="account-wrap">
                    <div class="account-top sign-up">
                        <div class="account-top-current">
                            <span>S'inscrire</span>
                        </div>
                        <div class="account-top-link">
                            <a href="../login/main.php">Se connecter</a>
                        </div>
                    </div>
                    <div class="account-main">
                        <h3 class="account-title">S'inscrire maintenant👋</h3>
                        <form action="signup.php" method="post" class="account-form">
                            <div class="account-form-item mb-20">
                                <div class="account-form-label">
                                    <label>CIN</label>
                                </div>
                                <div class="account-form-input">
                                    <input type="text" name="cin" placeholder="Saisir votre cin" required>
                                </div><br>
                                <?php
                                if (isset($_GET['error'])) {
                                    $error = $_GET['error'];
                                    if ($error === 'cin_exists') {
                                        echo '<div class="alert alert-danger">CIN already exists. Please choose a different one.</div>';
                                    }
                                }
                                ?>
                            </div>
                            <div class="account-form-item mb-20">
                                <div class="account-form-label">
                                    <label>Nom</label>
                                </div>
                                <div class="account-form-input">
                                    <input type="text" name="nom" placeholder="Saisir votre nom" required>
                                </div>
                            </div>
                            <div class="account-form-item mb-20">
                                <div class="account-form-label">
                                    <label>Prénom</label>
                                </div>
                                <div class="account-form-input">
                                    <input type="text" name="prenom" placeholder="Saisir votre Prénom" required>
                                </div>
                            </div>
                            <div class="account-form-item mb-20">
                                <div class="account-form-label">
                                    <label>Votre e-mail</label>
                                </div>
                                <div class="account-form-input">
                                    <input type="email" name="email" placeholder="Saisir votre Email" required>
                                </div>
                            </div>
                            <div class="account-form-item mb-15">
                                <div class="account-form-label">
                                    <label>Votre Mot de passe</label>
                                    
                                </div>
                                <div class="account-form-input account-form-input-pass">
                                    <input type="password" name="password" placeholder="*********" required>
                                    <span><i class="fa-thin fa-eye"></i></span>
                                </div>
                            </div>
                            <div class="account-form-condition">
                                <label class="condition_label">êtes-vous un professeur ?
                                    <input type="checkbox" name="estProfesseur">
                                    <span class="check_mark"></span>
                                </label>
                            </div>
                            <div class="account-form-button">
                                <button type="submit" name="submit" class="account-btn">S'inscrire</button>
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
                                <p>Vous avez déjà un compte ? <a href="../login/main.php">Connectez-vous ici</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
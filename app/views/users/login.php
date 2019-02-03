<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
                <?php flash('register_success');?>
                <h2 class="text-center">
                    <img src="https://img.icons8.com/dusk/30/000000/password.png">
                    Login
                </h2>
                <p class="text-center">Please fill in your credentials to log in</p>
                <form action="<?=URLROOT;?>/users/login" method="post">
                    <div class="form-group">
                        <label for="email">
                            <img src="https://img.icons8.com/dusk/20/000000/secured-letter.png">
                            Email:<sup>*</sup>
                        </label>
                        <input
                            type="email"
                            name="email"
                            class="form-control <?=(!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                            value="<?=$data['email'];?>"
                        >
                        <span class="invalid-feedback"><?=$data['email_err'];?></span>
                    </div>
                    <div class="form-group">
                        <label for="password">
                            <img src="https://img.icons8.com/dusk/20/000000/lock-2.png">
                            Password:<sup>*</sup>
                        </label>
                        <input
                            type="password"
                            name="password"
                            class="form-control <?=(!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
                            value="<?=$data['password'];?>"
                        >
                        <span class="invalid-feedback"><?=$data['password_err'];?></span>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-block btn-success">
                                <img src="https://img.icons8.com/dusk/20/000000/password.png">
                                Login
                            </button>
                        </div>
                        <div class="col">
                            <a href="<?=URLROOT;?>/users/register" class="btn btn-outline-dark btn-block">
                                No account? Register
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require_once APPROOT . '/views/inc/footer.php'; ?>
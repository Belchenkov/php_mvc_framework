<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light text-dark mt-5">
                <h2 class="text-center">
                    <img src="https://img.icons8.com/dusk/30/000000/add-user-male.png">
                    Create An Account
                </h2>
                <p class="text-center">Please fill out this form to register with us</p>
                <form action="<?=URLROOT;?>/users/register" method="post">
                    <div class="form-group">
                        <label for="name">
                            <img src="https://img.icons8.com/dusk/20/000000/user-male-circle.png">
                            Name:<sup>*</sup>
                        </label>
                        <input
                            type="text"
                            name="name"
                            class="form-control <?=(!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"
                            value="<?=$data['name'];?>"
                        >
                        <span class="invalid-feedback"><?=$data['name_err'];?></span>
                    </div>
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
                    <div class="form-group">
                        <label for="password">
                            <img src="https://img.icons8.com/dusk/20/000000/lock-2.png">
                            Confirm Password:<sup>*</sup>
                        </label>
                        <input
                            type="password"
                            name="confirm_password"
                            class="form-control <?=(!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>"
                            value="<?=$data['confirm_password'];?>"
                        >
                        <span class="invalid-feedback"><?=$data['confirm_password_err'];?></span>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-block btn-success">
                                <img src="https://img.icons8.com/dusk/25/000000/edit-user-male.png">
                                Register
                            </button>
                        </div>
                        <div class="col">
                            <a href="<?=URLROOT;?>/users/login" class="btn btn-outline-dark btn-block">
                                Have an account? Login
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require_once APPROOT . '/views/inc/footer.php'; ?>
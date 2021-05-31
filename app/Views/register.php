<?= $this->include('/templates/header'); ?>
<?= $this->include('/templates/navbar'); ?>

<div class="container bg-danger bg-gradient mb-5">
    <div class="row">
        <div class="col-12 col-sm8- offset-sm col-md-6 offset-md-3 mt-5 mb-5 pt-3 pb-3 bg-white from-wrapper">

            <div class="container">
                <h2>Register</h2>
                <hr>
                <form action="" method="post">
                    <div class="row d-flex justify-content-center mb-3">
                        <div class="col-12 col-sm-5">
                            <div class="form-group">
                                <label for="firstname" class="form-label">firstname : </label>
                                <input type="text" class="form-control" id="firstname" name="firstname" value="<?= set_value('firstname'); ?>" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 col-sm-5">
                            <div class="form-group">
                                <label for="lastname" class="form-label">lastname : </label>
                                <input type="text" class="form-control" id="lastname" name="lastname" value="<?= set_value('lastname'); ?>" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="email" class="form-label">Email address : </label>
                                <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>" autocomplete="off">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="password" class="form-label">password : </label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="confirmpassword" class="form-label">confirm password : </label>
                                    <input type="password" class="form-control" id="confirmpassword" name="confirmpassword">
                                </div>
                            </div>
                        </div>
                        <?php if (isset($validation)) : ?>
                            <div class="col-12">
                                <div class="alert alert-warning mt-2" role="alert">
                                    <?= $validation->listErrors(); ?>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>


                    <div class="row d-flex align-items-center mt-4 mb-3">
                        <div class="col-12 col-sm-4 w-85">
                            <button type="submit" name="submit" class="btn btn-warning px-5">Join!</button>
                        </div>
                        <div class="col-12 col-sm-8 text-right flex-shrink-1 ">
                            <h6>Already have an account ? <a href="<?= base_url('/users/index'); ?>">Sign in</a></h6>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
<?= $this->include('/templates/footer'); ?>
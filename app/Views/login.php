<?= $this->include('/templates/header'); ?>
<?= $this->include('/templates/navbar'); ?>

<div class="container bg-warning">
    <div class="row">
        <div class="col-12 col-sm8- offset-sm col-md-6 offset-md-3 mt-5 mb-5 pt-3 pb-3 bg-white from-wrapper">

            <div class="container">
                <h2>Login</h2>
                <hr>
                <?php if (session()->get('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->get('success'); ?>
                    </div>
                <?php endif ?>
                <?php if (isset($validation)) : ?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors(); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <form action="/" method="post">
                    <div class="form-group">
                        <label for="email" class="form-label">Email address : </label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">password : </label>
                        <input type="password" class="form-control" id="password" name="password" autocomplete="off">
                    </div>
                    <div class="row d-flex align-items-center mt-4 mb-3">
                        <div class="col-12 col-sm-4 w-85">
                            <button type="submit" name="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="col-12 col-sm-8 text-right flex-shrink-1 ">

                            <h6>Don't have any account yet? <a href="<?= base_url('register'); ?>">Sign up</a></h6>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
<?= $this->include('/templates/footer'); ?>
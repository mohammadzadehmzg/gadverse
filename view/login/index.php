<?php require_once "./view/layouts/header.php"; ?>
<section>
    <div class="container">
        <?php if (isset($_SESSION['timeoutMessage'])) {
            $logOutmessage = $_SESSION['timeoutMessage'];
            ?>
            <div class="position-absolute col-lg-4 text-center start-0 end-0 mx-auto p-2  shadow bg-danger text-white rounded-5" style="top: 10px">
                <?= $logOutmessage; ?>
            </div>
        <?php } ?>
        <div class="col-lg-6 m-auto">
            <div class="rounded-4 bg-white shadow p-2" style="margin-top: 4rem">
                <div class="text-center">
                    <img src="/assets/img/logo.png" alt="Logo" class="img-fluid"
                         width="200" alt="">
                </div>
                <form method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="username" placeholder="نام کاربری">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="کلمه عبور">
                    </div>
                    <?php if (isset($message)) { ?>
                        <div class="alert alert-danger">
                            <?= $message; ?>
                        </div>
                    <?php } ?>
                    <button type="submit" name="loginSubmission" class="btn btn-info w-100">ورود</button>
                </form>
            </div>

        </div>
    </div>
</section>
<?php require_once "./view/layouts/footer.php"; ?>

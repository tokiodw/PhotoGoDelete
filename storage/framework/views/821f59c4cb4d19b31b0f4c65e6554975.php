<div class="container">
    <div class="row">
        <div class="col-xl-7 col-lg-5 col-12 d-flex align-items-center justify-content-lg-start justify-content-center mb-lg-0 mb-5">
            <img src="<?php echo e(Vite::asset('resources/images/logo.png')); ?>" />
        </div>
        <div class="col-xl-5 col-lg-7 col-12">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header">
                    <h3 class="text-start font-weight-light my-4 ms-2">PhotoGo へログイン</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputEmail" type="email" name="email"
                                placeholder="name@example.com" />
                            <label for="inputEmail">メールアドレス</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputPassword" type="password" name="password"
                                placeholder="Password" />
                            <label for="inputPassword">パスワード</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" id="inputRememberPassword" type="checkbox"
                                name="remember" />
                            <label class="form-check-label" for="inputRememberPassword">パスワードを記憶する</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a class="small" href="password.html">パスワードを忘れた方</a>
                            <button class="btn btn-primary" type="submit">ログイン</a>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div><a href="<?php echo e(route('register')); ?>">新規登録</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/laravel-project/resources/views/components/login-container.blade.php ENDPATH**/ ?>
<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                <div class="d-flex align-items-center justify-content-end mt-4 mb-0">
                    <button class="btn btn-primary" type="submit">ログイン</a>
                </div>
            </form>
        </div>
        <div class="card-footer text-center py-3">
            <div><a href="<?php echo e(route('register')); ?>">新規登録</a></div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?><?php /**PATH /var/www/laravel-project/resources/views/auth/login.blade.php ENDPATH**/ ?>
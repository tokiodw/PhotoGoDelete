<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PhotoGo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
        <div>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php if(Route::has('login')): ?>
            <?php if(auth()->guard()->check()): ?>
            <li class="nav-item">
              <form action="<?php echo e(route('logout')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <a 
                  class="nav-link active" 
                  aria-current="page" 
                  href="<?php echo e(route('logout')); ?>"
                  onclick="event.preventDefault();
                    this.closest('form').submit();">ログアウト</a>
              </form>
            </li>
            <?php else: ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo e(route('login')); ?>">ログイン</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo e(route('register')); ?>">登録</a>
            </li>
            <?php endif; ?>
            <?php endif; ?>
          </ul>
        </div>
        
      </div>
    </div>
  </nav><?php /**PATH /var/www/laravel-project/resources/views/layouts/header.blade.php ENDPATH**/ ?>
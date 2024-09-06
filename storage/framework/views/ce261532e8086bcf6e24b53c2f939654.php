<?php
    use App\Enums\StatusType;
?>

<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('scripts', null, []); ?> 
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/home.ts']); ?>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('components', null, []); ?> 
        <?php if (isset($component)) { $__componentOriginal7cfab914afdd05940201ca0b2cbc009b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7cfab914afdd05940201ca0b2cbc009b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.toast','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('toast'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7cfab914afdd05940201ca0b2cbc009b)): ?>
<?php $attributes = $__attributesOriginal7cfab914afdd05940201ca0b2cbc009b; ?>
<?php unset($__attributesOriginal7cfab914afdd05940201ca0b2cbc009b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7cfab914afdd05940201ca0b2cbc009b)): ?>
<?php $component = $__componentOriginal7cfab914afdd05940201ca0b2cbc009b; ?>
<?php unset($__componentOriginal7cfab914afdd05940201ca0b2cbc009b); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal752d6f80f4c057aa8af2ffff05c33a5a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal752d6f80f4c057aa8af2ffff05c33a5a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-modal','data' => ['modalId' => 'uploadModal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['modalId' => 'uploadModal']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal752d6f80f4c057aa8af2ffff05c33a5a)): ?>
<?php $attributes = $__attributesOriginal752d6f80f4c057aa8af2ffff05c33a5a; ?>
<?php unset($__attributesOriginal752d6f80f4c057aa8af2ffff05c33a5a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal752d6f80f4c057aa8af2ffff05c33a5a)): ?>
<?php $component = $__componentOriginal752d6f80f4c057aa8af2ffff05c33a5a; ?>
<?php unset($__componentOriginal752d6f80f4c057aa8af2ffff05c33a5a); ?>
<?php endif; ?>
     <?php $__env->endSlot(); ?>
    <div class="container">
        

        <div class="row mt-3">
            <h2 class="col">アップロード一覧</h2>
            <div class="col ms-auto text-end">
                <?php if (isset($component)) { $__componentOriginald24316deafa00a4562bf495d32fdea65 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald24316deafa00a4562bf495d32fdea65 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-modal-button','data' => ['modalId' => 'uploadModal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-modal-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['modalId' => 'uploadModal']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald24316deafa00a4562bf495d32fdea65)): ?>
<?php $attributes = $__attributesOriginald24316deafa00a4562bf495d32fdea65; ?>
<?php unset($__attributesOriginald24316deafa00a4562bf495d32fdea65); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald24316deafa00a4562bf495d32fdea65)): ?>
<?php $component = $__componentOriginald24316deafa00a4562bf495d32fdea65; ?>
<?php unset($__componentOriginald24316deafa00a4562bf495d32fdea65); ?>
<?php endif; ?>
            </div>
            
        </div>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">マップ</th>
                            <th scope="col">写真グループ名</th>
                            <th scope="col">ステータス</th>
                            <th scole="col">ファイル名</th>
                            <th scope="col">写真枚数</th>
                            <th scope="col">対象外件数</th>
                            <th scope="col">アップロード開始日時</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $photoGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="">
                                <td scope="row">
                                    <?php if( $group->status_type === StatusType::SUCCESS->value): ?>
                                        <button class="btn btn-sm btn-outline-dark">開く</button>
                                    <?php endif; ?>
                                </td>
                                <td scope="row"><?php echo e($group->group_name); ?></td>
                                <td><?php if (isset($component)) { $__componentOriginal8c81617a70e11bcf247c4db924ab1b62 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c81617a70e11bcf247c4db924ab1b62 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status-badge','data' => ['status' => ''.e($group->status).'','statusType' => ''.e($group->status_type).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status-badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['status' => ''.e($group->status).'','statusType' => ''.e($group->status_type).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8c81617a70e11bcf247c4db924ab1b62)): ?>
<?php $attributes = $__attributesOriginal8c81617a70e11bcf247c4db924ab1b62; ?>
<?php unset($__attributesOriginal8c81617a70e11bcf247c4db924ab1b62); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c81617a70e11bcf247c4db924ab1b62)): ?>
<?php $component = $__componentOriginal8c81617a70e11bcf247c4db924ab1b62; ?>
<?php unset($__componentOriginal8c81617a70e11bcf247c4db924ab1b62); ?>
<?php endif; ?></td>
                                <td><?php echo e($group->file_name); ?></td>
                                <td><?php echo e($group->photo_count); ?></td>
                                <td><?php echo e($group->non_photo_count); ?></td>
                                <td><?php echo e($group->created_at); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /var/www/laravel-project/resources/views/home.blade.php ENDPATH**/ ?>
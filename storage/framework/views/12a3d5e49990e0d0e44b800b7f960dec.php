<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['modalId']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['modalId']); ?>
<?php foreach (array_filter((['modalId']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<button
    type="button"
    class="btn btn-primary"
    data-bs-toggle="modal"
    data-bs-target="#<?php echo e($modalId); ?>"
>
    アップロード
</button><?php /**PATH /var/www/laravel-project/resources/views/components/upload-modal-button.blade.php ENDPATH**/ ?>
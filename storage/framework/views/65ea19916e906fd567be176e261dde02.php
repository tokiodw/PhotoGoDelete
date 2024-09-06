<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['status', 'statusType']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['status', 'statusType']); ?>
<?php foreach (array_filter((['status', 'statusType']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    use App\Enums\StatusType;

    // statusTypeに応じたクラスを設定
    $badgeClass = match ($statusType) {
        StatusType::INACTIVE->value => 'bg-secondary',
        StatusType::ACTIVE->value => 'bg-primary',
        StatusType::WARNING->value => 'bg-warning',
        StatusType::ERROR->value => 'bg-danger',
        StatusType::SUCCESS->value => 'bg-success',
        default => 'bg-secondary', // デフォルトクラス
    };
?>

<span class="badge rounded-pill <?php echo e($badgeClass); ?>"><?php echo e($status); ?></span><?php /**PATH /var/www/laravel-project/resources/views/components/status-badge.blade.php ENDPATH**/ ?>
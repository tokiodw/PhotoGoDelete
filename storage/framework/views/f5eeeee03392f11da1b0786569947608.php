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
<div class="modal fade" id="<?php echo e($modalId); ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
    role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    画像/GPXをPhotoGoへ登録
                </h5>
                
            </div>
            <div class="modal-body">
                <div id="alertBox" class="alert alert-danger d-none"></div>
                <div class="form-group mb-3">
                    <label for="nameInput" class="form-label">■写真グループ名を入力</label>
                    <input class="form-control" type="text" id="nameInput" required>
                    <div id="nameInputFeedback" class="invalid-feedback"></div>
                </div>
                <div class="form-group mb-3">
                    <label for="zipFileInput" class="form-label">■zipファイルを選択</label>
                    <input class="form-control" type="file" id="zipFileInput" accept=".zip" required>
                    <div id="zipFileInputFeedback" class="invalid-feedback"></div>
                </div>
                <div class="form-group mb-3">
                    <label for="gpxFileInput" class="form-label">■GPXファイルを選択</label>
                    <input class="form-control" type="file" id="gpxFileInput" accept=".gpx" required>
                    <div id="gpxFileInputFeedback" class="invalid-feedback"></div>
                </div>
                <div id="progressWrapper" class="progress" role="progressbar" aria-label="てすと" aria-valuenow="0"
                    aria-valuemin="0" aria-valuemax="100" style="display: none;">
                    <div id="progressBar" class="progress-bar progress-bar-striped progress-bar-animated"
                        style="width: 0%;"></div>
                </div>
                <p id="progressText"></p>
            </div>
            <div class="modal-footer">
                <button Id="uploadButton" class="btn btn-primary" type="submit">
                    <span Id="uploadButtonBefore">アップロード</span>
                    <span id="uploadButtonAfter" style="display: none;">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        アップロード中...
                    </span>
                    </a>
                </button>
                <button id="cancelButton" class="btn btn-secondary" data-bs-dismiss="modal"
                    aria-label="Close">閉じる</button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/laravel-project/resources/views/components/upload-modal.blade.php ENDPATH**/ ?>
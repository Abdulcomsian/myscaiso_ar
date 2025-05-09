
<?php $__empty_1 = true; $__currentLoopData = $downloads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $download): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<div style="display: flex; margin-left: 2em; margin-right: 2em; background:#f0f4fd; gap:80px; margin-bottom:20px; padding:30px 20px; align-items:center; border-radius:12px; ">
    <div style="display:flex; align-items:center; gap:40px">
        <?php if($download->thumb_nail): ?>
        <div>
            <img src="<?php echo e(asset('uploads/downloads/' . $download->thumb_nail)); ?>" width="110" height="156">
        </div>
        <div style="color:#084f95; font-size: 18px; font-weight:600; text-align:left;width:170px;"><?php echo e($download->name); ?></div>
        <?php endif; ?>
    </div>
   
 <div style="display: flex; gap:20px;justify-content:space-between;">
    <div style="display: flex; flex-direction: column;">
        <?php if($download->download_file): ?>
        <a href="<?php echo e(asset('uploads/downloads/' . $download->download_file)); ?>" target="_blank"><img src="assets/img/a4-btn-ar.png"  style="width: 80%"></a><br>
        <?php endif; ?>
        <?php if($download->download_file2): ?>
        <a href="<?php echo e(asset('uploads/downloads/' . $download->download_file2)); ?>" target="_blank"><img src="assets/img/a5-btn-ar.png"  style="width: 80%"></a><br>
        <?php endif; ?>
    </div>
   
 </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<div class="row">
    <div class="col-12">
        <p class="text-center " style="color:#084f95; font-size: 18px; font-weight:600;">لم يتم العثور على أي سجل</p>
    </div>
</div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\myiso_ar\resources\views/dashboard/category-download.blade.php ENDPATH**/ ?>
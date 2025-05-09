
<div class="kt-input-icon kt-input-icon--right"  style="margin-top: 10px;">
    <select name="userid[]" id="langOpt3" class="form-control" multiple>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div><?php /**PATH C:\xampp\htdocs\myiso_ar\resources\views/components/users_dropdown.blade.php ENDPATH**/ ?>
<!-- resources/views/partials/user-list.blade.php -->
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $otherUser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="user-item">
    <a href="<?php echo e(route('chat', $otherUser->id)); ?>">
        <?php if($otherUser->profile_image): ?>
        <img src="<?php echo e(asset('storage/photos/' . $otherUser->profile_image)); ?>" alt="Profile Image">
        <?php endif; ?>
        <div class="details">
            <span><?php echo e($otherUser->first_name); ?> <?php echo e($otherUser->last_name); ?></span>
        </div>
    </a>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\chat-realtime\resources\views/partials/user-list.blade.php ENDPATH**/ ?>
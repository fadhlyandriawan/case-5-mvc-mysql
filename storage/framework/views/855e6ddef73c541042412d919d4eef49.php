<?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="chat-message <?php echo e($message->sender_id == Auth::id() ? 'sent' : 'received'); ?>">
    <p><?php echo e($message->message); ?></p>
    <small><?php echo e($message->created_at->format('Y-m-d H:i:s')); ?></small>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\chat-realtime\resources\views/partials/messages.blade.php ENDPATH**/ ?>
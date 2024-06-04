<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with <?php echo e($receiver->first_name); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>
<body>
    <div>
        <button class="button-chat" onclick="myFunction()"><i class="far fa-comment-alt"></i></button>
    </div>
    <div class="wrapper-chat" id="chat">
        <section class="chat-area">
            <header>
                <a href="<?php echo e(route('home')); ?>" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <?php if($receiver->profile_image): ?>
                <img src="<?php echo e(asset('storage/photos/' . $receiver->profile_image)); ?>" alt="Profile Image" class="profile-img">
                <?php endif; ?>
                <div class="details">
                    <span><?php echo e($receiver->first_name); ?> <?php echo e($receiver->last_name); ?></span>
                    <p>Active now</p>
                </div>
            </header>
            <div class="chat-box">
                <?php echo $__env->make('partials.messages', ['messages' => $messages], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <form action="#" class="typing-area" autocomplete="off">
                <?php echo csrf_field(); ?>
                <input type="text" name="receiver_id" value="<?php echo e($receiver->id); ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="Type a message here...">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
</body>
<script>
    function myFunction() {
        var chat = document.getElementById("chat");
        chat.hidden = !chat.hidden;
    }
</script>
<script src="<?php echo e(asset('js/chat.js')); ?>"></script>
</html>
<?php /**PATH C:\xampp\htdocs\chat-realtime\resources\views/chat.blade.php ENDPATH**/ ?>
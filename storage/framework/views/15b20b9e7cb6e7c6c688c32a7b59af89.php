<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Chat</title>
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>

<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <div class="content">
                    <?php echo csrf_field(); ?>
                    <?php if($user->profile_image): ?>
                    <img src="<?php echo e(asset('storage/photos/' . $user->profile_image)); ?>" alt="Profile Image">
                    <?php endif; ?>
                    <div class="details">
                        <span><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></span>
                    </div>
                </div>
                <a href="<?php echo e(route('logout')); ?>" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select a user to start chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                <!-- User list will be populated here via AJAX -->
            </div>
        </section>
    </div>
    <script src="<?php echo e(asset('js/users.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\chat-realtime\resources\views/home.blade.php ENDPATH**/ ?>
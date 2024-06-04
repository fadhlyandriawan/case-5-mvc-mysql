<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Aplikasi Chat Realtime</header>
            <form action="<?php echo e(route('loginPost')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="error-txt"></div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="<?php echo e(route('register')); ?>">signup now</a></div>
        </section>
    </div>
    <script src="<?php echo e(asset('js/pass-show-hide.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\chat-realtime\resources\views/auth/login.blade.php ENDPATH**/ ?>
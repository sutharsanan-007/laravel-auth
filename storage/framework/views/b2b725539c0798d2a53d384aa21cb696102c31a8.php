<?php
if(Auth::user()){
    return redirect('/dashboard');
}else{
    echo "no user";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form action="<?php echo e(route('login')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo e(old('email')); ?>" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <?php if($errors->any()): ?>
        <div style="color: red;">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($error); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>

    <button type="submit">Login</button>
</form>

<p>Don't have an account? <a href="<?php echo e(route('register')); ?>">Register</a></p>

</body>
</html>
<?php /**PATH E:\Sutharsanan Project & Credientials\Laravel\example-app\resources\views/auth/login.blade.php ENDPATH**/ ?>
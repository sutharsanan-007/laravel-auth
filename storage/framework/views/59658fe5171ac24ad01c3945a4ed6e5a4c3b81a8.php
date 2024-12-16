<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

<h2>Register</h2>

<form action="<?php echo e(route('register')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo e(old('name')); ?>" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo e(old('email')); ?>" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" name="password_confirmation" required><br>

    <?php if($errors->any()): ?>
        <div style="color: red;">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($error); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>

    <button type="submit">Register</button>
</form>

<p>Already have an account? <a href="<?php echo e(route('login')); ?>">Login</a></p>

</body>
</html>
<?php /**PATH E:\Sutharsanan Project & Credientials\Laravel\example-app\resources\views/auth/register.blade.php ENDPATH**/ ?>
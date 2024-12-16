<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

<h2>Welcome, <?php echo e(Auth::user()->name); ?></h2>

<form action="<?php echo e(route('logout')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <button type="submit">Logout</button>
</form>

</body>
</html>
<?php /**PATH E:\Sutharsanan Project & Credientials\Laravel\example-app\resources\views/dashboard.blade.php ENDPATH**/ ?>
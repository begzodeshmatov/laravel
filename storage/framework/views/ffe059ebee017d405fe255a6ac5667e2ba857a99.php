<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1 style="text-align: center;">Bu jadvalni pdf ga export qilinishi</h1>
    <table border="2" cellspacing="0" cellpadding="15" width="100%">
        <thead>
            <tr align="center">
                <th class="column-title">Id </th>
                <th class="column-title">Name</th>
                <th class="column-title">Title </th>
                <th class="column-title">Image</th>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $malumot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr align="center">
                    <td class=" "><?php echo e($mal->id); ?></td>
                    <td class=" "><?php echo e($mal->name); ?></td>
                    <td class=" "><?php echo e($mal->title); ?></td>
                    <td class=" "> <img src="rasmlar/<?php echo e($mal->image); ?>" width="100" height="100"
                            alt="Rasm chiqmadi"></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\newdars\resources\views/malumotpdf.blade.php ENDPATH**/ ?>
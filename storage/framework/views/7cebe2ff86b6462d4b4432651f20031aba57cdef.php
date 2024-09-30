<?php $__env->startSection('content'); ?>
    <!-- page content -->
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row" style="display: inline-block;">
            <div class="tile_count">
            </div>
        </div>
        <div class="card-header">
            
            <a href="/exportword" style="float: right;" class="btn btn-success"> ExportWord</a>
            <button style="float:right;" class="btn btn--add btn btn-primary" type="button" data-bs-toggle="modal"
                data-bs-target="#exampleModal"><i class="fa fa-plus"></i></button>
            <div class="col-md-5">
                <div class="form-group">
                    <form action="/search" method="GET">
                        <div class="input-group">
                            <select class="form-select  form-select-sm" aria-label="Default select example" name="news">
                                <option>Yangiliklarni tanlang...</option>
                                <option value="1">Jizzax yangiliklari</option>
                                <option value="2">O'zbekiston yangiliklari</option>
                                <option value="3">Jahon yangiliklari</option>
                            </select>
                            <button type="submit" class="btn btn-primary"><i style="font-size:20px;"
                                    class='bx bx-search'></i></button>
                            <a href="/clear" class="btn btn-primary"><i style="font-size:20px;"
                                    class='bx bx-trash'></i></a>
                        </div>
                </div>
            </div>
            <div class="container11">
                <div class="col-md-5">
                    <div class="form-group">
                        <form method="GET" action="/searchch">
                            <div class="input-group">
                                <input type="search" class="form-control" name="searchch" placeholder="Search">
                                <button class="btn btn-success " type="submit" style="font-size: 15px;">Search</button>
                                <a href="/clearyangilik" class="btn btn-success"><i style="font-size:20px;"
                                        class='bx bx-trash'></i></a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Yangilik Qo'shish</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/yangilikSave" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Nomini kiriting...">
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p style="color:red;"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title"
                                        placeholder="Title kiriting...">
                                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p style="color:red;"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">News</label>
                                    <select class="form-select" aria-label="Default select example" name="news">
                                        <!-- <option selected>Yangiliklarni tanlang...</option> -->
                                        <option value="1">Jizzax yangiliklari</option>
                                        <option value="2">O'zbekiston yangiliklari</option>
                                        <option value="3">Jahon yangiliklari</option>
                                        <?php $__errorArgs = ['news'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p style="color:red;"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </select>

                                </div>
                                <button class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /top tiles -->
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                            <th class="column-title">Id </th>
                            <th class="column-title">Name</th>
                            <th class="column-title">Title </th>
                            <th class="column-title">News</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                        class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $yangilik; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $yan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="even pointer">
                                <td class=" "><?php echo e($yan->id); ?></td>
                                <td class=" "><?php echo e($yan->name); ?></td>
                                <td class=" "><?php echo e($yan->title); ?></td>
                                <td class=" ">
                                    <?php if($yan->news == 1): ?>
                                        Jizzax yangiliklari
                                    <?php elseif($yan->news == 2): ?>
                                        O'zbekiston yangiliklari
                                    <?php else: ?>
                                        Jahon yangiliklar
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a data-bs-toggle="modal" class="btn btn-primary"
                                        data-bs-target="#exampleModal<?php echo e($yan->id); ?>" href="#"><i
                                            class='bx bx-pencil'></i></a>
                                    <a data-bs-toggle="modal" class="btn btn-danger"
                                        data-bs-target="#deleteYangilik<?php echo e($yan->id); ?>" href="#"><i
                                            class='bx bx-trash'></i></a>


                                    <!-- Modal -->

                                    <div class="modal fade" id="exampleModal<?php echo e($yan->id); ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                        Yangilik Edit</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/yangilikEditSave/<?php echo e($yan->id); ?>" method="POST"
                                                        enctype="multipart/form-data">
                                                        <?php echo csrf_field(); ?>
                                                        <div class="mb-3">
                                                            <label class="form-label">Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                value="<?php echo e($yan->name); ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Title</label>
                                                            <input type="text" class="form-control" name="title"
                                                                value="<?php echo e($yan->title); ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">News</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example" name="news"
                                                                value="<?php echo e($yan->news); ?>">
                                                                <!-- <option selected>Yangiliklarni tanlang...</option> -->
                                                                <option value="Jizzax yangiliklari">Jizzax
                                                                    yangiliklari</option>
                                                                <option value="O'zbekiston yangiliklari">
                                                                    O'zbekiston yangiliklari</option>
                                                                <option value="Jahon yangiliklari">Jahon
                                                                    yangiliklari</option>
                                                            </select>
                                                        </div>
                                                        <button class="btn btn-primary">Edit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteYangilik<?php echo e($yan->id); ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                        O'chirish</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Haqiqatdan ham <?php echo e($yan->name); ?> ni o'chirmoqchimisiz
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Yo'q</button>
                                                    <a href="/deleteyan/<?php echo e($yan->id); ?>"
                                                        class="btn btn-primary">Xa</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <br />
        </div>
    </div>
    <!-- /page content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newdars\resources\views/yangilik.blade.php ENDPATH**/ ?>
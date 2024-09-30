<?php $__env->startSection('content'); ?>
    <!-- page content -->
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row" style="display: inline-block;">
            <div class="tile_count">
            </div>
        </div>

        <div class="container11">
            <div class="col-md-5">
                <div class="form-group">
                    <form method="GET" action="/searchnew">
                        <div class="input-group">
                            <input type="search" class="form-control" name="searchnew" placeholder="Search">
                            <button class="btn btn-success " type="submit">Search</button>
                            <a href="/clearbog" class="btn btn-success"><i style="font-size:20px;"
                                    class='bx bx-trash'></i></a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <!-- /top tiles -->
        <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
                <thead>
                    <h2>O'qilmagan xabarlar</h2>
                    <tr class="headings">
                        <th class="column-title">Id </th>
                        <th class="column-title">Name</th>
                        <th class="column-title">Email</th>
                        <th class="column-title">Number</th>
                        <th class="column-title">Title</th>
                        <th class="column-title">Action</th>
                        </th>
                        <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt">
                                </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                    </tr>
                </thead>

                <tbody>

                    <?php $__currentLoopData = $boglanish; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($nav->readd != 1): ?>
                            <tr class="even pointer">
                                <td class=" "><?php echo e($nav->id); ?></td>
                                <td class=" "><?php echo e($nav->name); ?></td>
                                <td class=" "><?php echo e($nav->email); ?></td>
                                <td class=" "><?php echo e($nav->number); ?></td>
                                <td class=" "><?php echo e($nav->title); ?></td>
                                <td>
                                    <a data-bs-toggle="modal" class="btn btn-primary"
                                        data-bs-target="#exampleModal<?php echo e($nav->id); ?>" href="#"><i
                                            class='bx bx-pencil'></i></a>
                                    <a data-bs-toggle="modal" class="btn btn-danger"
                                        data-bs-target="#deleteXabar<?php echo e($nav->id); ?>" href="#"><i
                                            class='bx bx-trash'></i></a>
                                    <a data-bs-toggle="modal" class="btn btn-success"
                                        data-bs-target="#seeXabar<?php echo e($nav->id); ?>" href="#"><i
                                            class="far fa fa-eye"></i></a>
                                </td>

                                <!-- Modal -->

                                <div class="modal fade" id="exampleModal<?php echo e($nav->id); ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Yangi
                                                    xabar Edit</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/xabarEditSave/<?php echo e($nav->id); ?>" method="POST"
                                                    enctype="multipart/form-data">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="mb-3">
                                                        <label class="form-label">Name</label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="<?php echo e($nav->name); ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Email</label>
                                                        <input type="email" class="form-control" name="email"
                                                            value="<?php echo e($nav->email); ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Number</label>
                                                        <input type="text" class="form-control" name="number"
                                                            value="<?php echo e($nav->number); ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" class="form-control" name="title"
                                                            value="<?php echo e($nav->title); ?>">
                                                    </div>
                                                    <button class="btn btn-primary">Edit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteXabar<?php echo e($nav->id); ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">O'chirish
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Haqiqatdan ham <?php echo e($nav->name); ?> ni o'chirmoqchimisiz</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Yo'q</button>
                                                <a href="/delete/<?php echo e($nav->id); ?>" class="btn btn-primary">Xa</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="seeXabar<?php echo e($nav->id); ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Yangi
                                                    xabar</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?php echo e($nav->name); ?> <br>
                                                    <?php echo e($nav->email); ?> <br>
                                                    <?php echo e($nav->number); ?> <br>
                                                    <?php echo e($nav->title); ?>

                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Yo'q</button>
                                                <a href="/readMessage/<?php echo e($nav->id); ?>"
                                                    class="btn btn-primary">O'qildi</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
                <thead>
                    <h2>O'qilgan xabarlar</h2>
                    <tr class="headings">
                        <th class="column-title">Id </th>
                        <th class="column-title">Name</th>
                        <th class="column-title">Email</th>
                        <th class="column-title">Number</th>
                        <th class="column-title">Title</th>
                        <th class="column-title">Action</th>
                        </th>
                        <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                    class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                    </tr>
                </thead>

                <tbody>

                    <?php $__currentLoopData = $boglanish; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($nav->readd == 1): ?>
                            <tr class="even pointer">
                                <td class=" "><?php echo e($nav->id); ?></td>
                                <td class=" "><?php echo e($nav->name); ?></td>
                                <td class=" "><?php echo e($nav->email); ?></td>
                                <td class=" "><?php echo e($nav->number); ?></td>
                                <td class=" "><?php echo e($nav->title); ?></td>
                                <td>
                                    <a data-bs-toggle="modal" class="btn btn-primary"
                                        data-bs-target="#exampleModal<?php echo e($nav->id); ?>" href="#"><i
                                            class='bx bx-pencil'></i></a>
                                    <a data-bs-toggle="modal" class="btn btn-danger"
                                        data-bs-target="#deleteXabar<?php echo e($nav->id); ?>" href="#"><i
                                            class='bx bx-trash'></i></a>
                                    <a data-bs-toggle="modal" class="btn btn-success"
                                        data-bs-target="#seeXabar<?php echo e($nav->id); ?>" href="#"><i
                                            class="far fa fa-eye"></i></a>
                                </td>


                                <!-- Modal -->

                                <div class="modal fade" id="exampleModal<?php echo e($nav->id); ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Yangi
                                                    xabar Edit</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/xabarEditSave/<?php echo e($nav->id); ?>" method="POST"
                                                    enctype="multipart/form-data">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="mb-3">
                                                        <label class="form-label">Name</label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="<?php echo e($nav->name); ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Email</label>
                                                        <input type="email" class="form-control" name="email"
                                                            value="<?php echo e($nav->email); ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Number</label>
                                                        <input type="text" class="form-control" name="number"
                                                            value="<?php echo e($nav->number); ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" class="form-control" name="title"
                                                            value="<?php echo e($nav->title); ?>">
                                                    </div>
                                                    <button class="btn btn-primary">Edit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteXabar<?php echo e($nav->id); ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">O'chirish
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Haqiqatdan ham <?php echo e($nav->name); ?> ni o'chirmoqchimisiz</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Yo'q</button>
                                                <a href="/delete/<?php echo e($nav->id); ?>" class="btn btn-primary">Xa</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <!-- Modal -->
                                <div class="modal fade" id="seeXabar<?php echo e($nav->id); ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Yangi
                                                    xabar</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?php echo e($nav->name); ?> <br>
                                                    <?php echo e($nav->email); ?> <br>
                                                    <?php echo e($nav->number); ?> <br>
                                                    <?php echo e($nav->title); ?>

                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Yo'q</button>
                                                <a href="/readMessage/<?php echo e($nav->id); ?>"
                                                    class="btn btn-primary">O'qildi</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </tbody>
            </table>
        </div>

        <br />
    </div>
    <!-- /page content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newdars\resources\views/boglanish.blade.php ENDPATH**/ ?>


<?php $__env->startSection('content'); ?>
    <!-- page content -->
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row" style="display: inline-block;">
            <div class="tile_count">
            </div>
        </div>

        <div class="card-header mt-5">
            <div class="container">
                <a href="/export" class="btn btn-success" style="float: right;">Export Excel</a>
            </div>
            <button style="float: right;" class="btn btn--add btn btn-primary" type="button" data-bs-toggle="modal"
                data-bs-target="#exampleModal"><i class="fa fa-plus"></i></button>
            <div class="col-md-6">
                <div class="form-group">
                    <form action="/searchkurs" method="GET">
                        <div class="input-group">
                            <select class="form-select form-select-sm" aria-label="Default select example" name="kurs">
                                <option>Kursni tanlang...</option>
                                <option value="1">Ona tili</option>
                                <option value="2">Ingliz tili</option>
                                <option value="3">Tarix</option>
                                <option value="4">Kompyuter savodxonligi</option>
                            </select>
                            <button type="submit" class="btn btn-primary"><i style="font-size:17px;"
                                    class='bx bx-search'></i></button>
                            <a href="/clearkurs" class="btn btn-primary"><i style="font-size:17px;"
                                    class='bx bx-trash'></i></a>
                        </div>

                    </form>
                </div>
            </div>

            <div class="container11">
                <div class="col-md-5">
                    <div class="form-group">
                        <form method="GET" action="/searchkurss">
                            <div class="input-group">
                                <input type="search" class="form-control" name="searchkurss" placeholder="Search">
                                <button class="btn btn-success " type="submit">Search</button>
                                <a href="/clearkurss" class="btn btn-success"><i style="font-size:20px;"
                                        class='bx bx-trash'></i></a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Kurs Qo'shish</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/darsSave" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Nomini kiriting...">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p style="color: red;"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Surname</label>
                                <input type="text" class="form-control" name="surname" placeholder="Title kiriting...">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Manzil</label>
                                <input type="text" class="form-control" name="manzil" placeholder="Title kiriting...">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <select class="form-select" aria-label="Default select example" name="email">
                                    <option selected>Fan tanlang...</option>
                                    <option value="1">ewfwef1@gmail.com</option>
                                    <option value="2">ewfwef@23gmail.com</option>
                                    <option value="3">ewfwef2@gmail.com</option>
                                    <option value="4">ewfwef5@gmail.com</option>
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
                        <th class="column-title">Surname </th>
                        <th class="column-title">Manzil</th>
                        <th class="column-title">Email</th>
                        <th class="column-title no-link last"><span class="nobr">Action</span>
                        </th>
                        <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                    class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $dars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="even pointer">
                            <td class=" "><?php echo e($kur->id); ?></td>
                            <td class=" "><?php echo e($kur->name); ?></td>
                            <td class=" "><?php echo e($kur->surname); ?></td>
                            <td class=" "><?php echo e($kur->manzil); ?></td>
                            <td class=" ">
                                <?php if($kur->email == 1): ?>
                                    ewfwef@gmail.com
                                <?php elseif($kur->email == 2): ?>
                                    ewfwef@gmail.com
                                <?php elseif($kur->email == 3): ?>
                                    ewfwef@gmail.com
                                <?php else: ?>
                                    ewfwef@gmail.com
                                <?php endif; ?>
                            </td>
                            <td>

                                <a data-bs-toggle="modal" class="btn btn-primary"
                                    data-bs-target="#exampleModal<?php echo e($kur->id); ?>" href="#"><i
                                        class='bx bx-pencil'></i></a>
                                <a data-bs-toggle="modal" class="btn btn-danger"
                                    data-bs-target="#deleteKurs<?php echo e($kur->id); ?>" href="#"><i
                                        class='bx bx-trash'></i></a>


                                <!-- Modal -->

                                <div class="modal fade" id="exampleModal<?php echo e($kur->id); ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Kurs Edit
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/kursEditSave/<?php echo e($kur->id); ?>" method="POST"
                                                    enctype="multipart/form-data">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="mb-3">
                                                        <label class="form-label">Name</label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="<?php echo e($kur->name); ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" class="form-control" name="title"
                                                            value="<?php echo e($kur->title); ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Image</label>
                                                        <input type="file" class="form-control" name="image"
                                                            accept=".png,.jpg,.jpeg">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Kurs</label>
                                                        <select class="form-select" aria-label="Default select example"
                                                            name="kurs" value="<?php echo e($kur->kurs); ?>">
                                                            <option selected>Fan tanlang...</option>
                                                            <option value="1">Ona tili</option>
                                                            <option value="2">Ingliz tili</option>
                                                            <option value="3">Tarix</option>
                                                            <option value="4">Kompyuter savodxonligi
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <button class="btn btn-primary">Edit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteKurs<?php echo e($kur->id); ?>" tabindex="-1"
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
                                                <p>Haqiqatdan ham <?php echo e($kur->name); ?> ni o'chirmoqchimisiz</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Yo'q</button>
                                                <a href="/deletekurs/<?php echo e($kur->id); ?>" class="btn btn-primary">Xa</a>
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
    <!-- /page content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newdars\resources\views/dars.blade.php ENDPATH**/ ?>
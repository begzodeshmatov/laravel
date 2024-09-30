<?php $__env->startSection('content'); ?>
    <!-- page content -->
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row" style="display: inline-block;">
            <div class="tile_count">
            </div>
        </div>
        <div class="card-header">
            



            <button style="float:right;" class="btn btn--add btn btn-primary" type="button" data-bs-toggle="modal"
                data-bs-target="#exampleModal"><i class="fa  fa-plus"></i></button>
            <div class="col-md-5">
                <div class="form-group">
                    <form action="/searchteach" method="GET">
                        <div class="input-group">
                            <select class="form-select form-select-sm" aria-label="Default select example" name="kurs">
                                <option>Kursni tanlang...</option>
                                <option value="1">1-kurs</option>
                                <option value="2">2-kurs</option>
                                <option value="3">3-kurs</option>
                                <option value="4">4-kurs</option>
                            </select>
                            <button type="submit" class="btn btn-primary"><i style="font-size:17px;"
                                    class='bx bx-search'></i></button>
                            <a href="/clearteach" class="btn btn-primary"><i style="font-size:17px;"
                                    class='bx bx-trash'></i></a>
                        </div>

                    </form>
                </div>
            </div>

            <div class="container11">
                <div class="col-md-5">
                    <div class="form-group">
                        <form method="GET" action="/searchles">
                            <div class="input-group">
                                <input type="search" class="form-control" name="searchles" placeholder="Search">
                                <button class="btn btn-success " type="submit">Search</button>
                                <a href="/clearles" class="btn btn-success"><i style="font-size:20px;"
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Talaba Qo'shish</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/lessonSave" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" required
                                    placeholder="Ism kiriting...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tug'ilgan kun</label>
                                <input type="date" class="form-control" name="birthday"
                                    placeholder="Tug'ilgan kun kiriting...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Ta'lim turi</label>
                                <select class="form-select" aria-label="Default select example" name="t_turi">
                                    <option selected>Ta'lim turini tanlang...</option>
                                    <option value="1">Grant</option>
                                    <option value="2">Kontrakt</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Qabul turi</label>
                                <select class="form-select" aria-label="Default select example" name="q_turi">
                                    <option selected>Qabul turini tanlang...</option>
                                    <option value="1">Kunduzgi</option>
                                    <option value="2">Sirtqi</option>
                                    <option value="3">Kechki</option>
                                    <option value="4">Masofaviy</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Fakultet</label>
                                <select class="form-select" aria-label="Default select example" name="fakultet">
                                    <option selected>Fakultetni tanlang...</option>
                                    <option value="1">Amaliy matematika</option>
                                    <option value="2">Psixologiya</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Oliy ta'lim nomi</label>
                                <select class="form-select" aria-label="Default select example" name="t_nomi">
                                    <option selected>Oliy ta'limni tanlang...</option>
                                    <option value="1">O'zbekiston Milliy universiteti Jizzax filiali</option>
                                    <option value="2">Jizzax davlat pedagogika universiteti</option>
                                    <option value="3">Jizzax davlat politexnika instituti</option>
                                    <option value="4">Sambhram universiteti</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kurs</label>
                                <select class="form-select" aria-label="Default select example" name="kurs">
                                    <option selected>Kursni tanlang...</option>
                                    <option value="1">1-kurs</option>
                                    <option value="2">2-kurs</option>
                                    <option value="3">3-kurs</option>
                                    <option value="4">4-kurs</option>
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
            <table class="table table-striped jambo_table ">
                <thead>
                    <tr class="headings">
                        <th class="column-title">Id </th>
                        <th class="column-title">Ism</th>
                        <th class="column-title">Tug'ilgan kun </th>
                        <th class="column-title">Ta'lim turi</th>
                        <th class="column-title">Qabul turi</th>
                        <th class="column-title">Fakultet</th>
                        <th class="column-title">Oliy Ta'lim nomi</th>
                        <th class="column-title">Kurs</th>
                        <th class="column-title no-link last"><span class="nobr">Action</span>
                        </th>
                        <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                    class="action-cnt">
                                </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                    </tr>
                </thead>

                <tbody>

                    <?php if(isset($message)): ?>
                        <div class="alert alert-info">
                            <?php echo e($message); ?>

                        </div>
                    <?php endif; ?>
                    <?php $__currentLoopData = $lesson; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $les): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="even pointer">


                            <td class=" "><?php echo e($les->id); ?></td>
                            <td class=" "><?php echo e($les->name); ?></td>
                            <td class=" "><?php echo e($les->birthday); ?></td>

                            <td class=" ">
                                <?php if($les->t_turi == 1): ?>
                                    Grant
                                <?php else: ?>
                                    Kontrakt
                                <?php endif; ?>
                            </td>
                            <td class=" ">
                                <?php if($les->q_turi == 1): ?>
                                    Kunduzgi
                                <?php elseif($les->q_turi == 2): ?>
                                    Sirtqi
                                <?php elseif($les->q_turi == 3): ?>
                                    Kechki
                                <?php else: ?>
                                    Masofaviy
                                <?php endif; ?>
                            </td>
                            <td class=" ">
                                <?php if($les->fakultet == 1): ?>
                                    Amaliy matematika
                                <?php else: ?>
                                    Psixologiya
                                <?php endif; ?>
                            </td>
                            <td class=" ">
                                <?php if($les->t_nomi == 1): ?>
                                    O'zbekiston Milliy universiteti Jizzax filiali
                                <?php elseif($les->t_nomi == 2): ?>
                                    Jizzax davlat pedagogika universiteti
                                <?php elseif($les->t_nomi == 3): ?>
                                    Jizzax davlat politexnika instituti
                                <?php elseif($les->t_nomi == 4): ?>
                                    Sambhram universiteti
                                <?php endif; ?>
                            </td>
                            <td class=" ">
                                <?php if($les->kurs == 1): ?>
                                    1-kurs
                                <?php elseif($les->kurs == 2): ?>
                                    2-kurs
                                <?php elseif($les->kurs == 3): ?>
                                    3-kurs
                                <?php elseif($les->kurs == 4): ?>
                                    4-kurs
                                <?php endif; ?>
                            </td>

                            <td class=" ">
                                <a data-bs-toggle="modal" class="btn btn-primary"
                                    data-bs-target="#exampleModal<?php echo e($les->id); ?>" href="#"><i
                                        class='bx bx-pencil'></i></a>
                                <a data-bs-toggle="modal" class="btn btn-danger"
                                    data-bs-target="#deleteLesson<?php echo e($les->id); ?>" href="#"><i
                                        class='bx bx-trash'></i></a>
                                <a href="/exportpdf/<?php echo e($les->id); ?>" class="btn btn-success"><i
                                        class='bx bxs-file-pdf'></i></a>
                                <a href="/exportwordd/<?php echo e($les->id); ?>" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#lessonModal<?php echo e($les->id); ?>">Ma'lumotlarni ko'rish
                                </a>


                                <!-- Modal -->

                                <div class="modal fade" id="exampleModal<?php echo e($les->id); ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                    Talaba
                                                    Tahrirlash</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/lessonEditSave/<?php echo e($les->id); ?>" method="POST"
                                                    enctype="multipart/form-data">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="mb-3">
                                                        <label class="form-label">Name</label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="<?php echo e(old('name', $les->name)); ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Tug'ilgan kun</label>
                                                        <input type="date" class="form-control" name="birthday"
                                                            value="<?php echo e(old('birthday', $les->birthday)); ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Ta'lim turi</label>
                                                        <select class="form-select" name="t_turi">
                                                            <option value="1"
                                                                <?php echo e($les->t_turi == 1 ? 'selected' : ''); ?>>Grant
                                                            </option>
                                                            <option value="2"
                                                                <?php echo e($les->t_turi == 2 ? 'selected' : ''); ?>>Kontrakt
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Qabul turi</label>
                                                        <select class="form-select" name="q_turi">
                                                            <option value="1"
                                                                <?php echo e($les->q_turi == 1 ? 'selected' : ''); ?>>Kunduzgi
                                                            </option>
                                                            <option value="2"
                                                                <?php echo e($les->q_turi == 2 ? 'selected' : ''); ?>>Sirtqi
                                                            </option>
                                                            <option value="3"
                                                                <?php echo e($les->q_turi == 3 ? 'selected' : ''); ?>>Kechki
                                                            </option>
                                                            <option value="4"
                                                                <?php echo e($les->q_turi == 4 ? 'selected' : ''); ?>>Masofaviy
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Fakultet</label>
                                                        <select class="form-select" name="fakultet">
                                                            <option value="1"
                                                                <?php echo e($les->fakultet == 1 ? 'selected' : ''); ?>>Amaliy
                                                                matematika</option>
                                                            <option value="2"
                                                                <?php echo e($les->fakultet == 2 ? 'selected' : ''); ?>>
                                                                Psixologiya
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Oliy ta'lim nomi</label>
                                                        <select class="form-select" name="t_nomi">
                                                            <option value="1"
                                                                <?php echo e($les->t_nomi == 1 ? 'selected' : ''); ?>>
                                                                O'zbekiston
                                                                Milliy universiteti Jizzax filiali</option>
                                                            <option value="2"
                                                                <?php echo e($les->t_nomi == 2 ? 'selected' : ''); ?>>Jizzax
                                                                davlat
                                                                pedagogika universiteti</option>
                                                            <option value="3"
                                                                <?php echo e($les->t_nomi == 3 ? 'selected' : ''); ?>>Jizzax
                                                                davlat
                                                                politexnika instituti</option>
                                                            <option value="4"
                                                                <?php echo e($les->t_nomi == 4 ? 'selected' : ''); ?>>Sambhram
                                                                universiteti</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Kurs</label>
                                                        <select class="form-select" name="kurs">
                                                            <option value="1"
                                                                <?php echo e($les->kurs == 1 ? 'selected' : ''); ?>>1-kurs
                                                            </option>
                                                            <option value="2"
                                                                <?php echo e($les->kurs == 2 ? 'selected' : ''); ?>>2-kurs
                                                            </option>
                                                            <option value="3"
                                                                <?php echo e($les->kurs == 3 ? 'selected' : ''); ?>>3-kurs
                                                            </option>
                                                            <option value="4"
                                                                <?php echo e($les->kurs == 4 ? 'selected' : ''); ?>>4-kurs
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <button class="btn btn-primary">Tahrirlash</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteLesson<?php echo e($les->id); ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                    O'chirish
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Haqiqatdan ham <?php echo e($les->name); ?> ni o'chirmoqchimisiz
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Yo'q</button>
                                                <a href="/deleteles/<?php echo e($les->id); ?>" class="btn btn-primary">Xa</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Jadval -->

                                <!-- Modal -->
                                <div class="modal fade" id="lessonModal<?php echo e($les->id); ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    <?php echo e($les->name); ?> haqida
                                                    ma'lumot</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><span style="font-weight: bold;">Ism:</span> <?php echo e($les->name); ?></p>
                                                <p><span style="font-weight: bold;">Tug'ilgan kun:</span>
                                                    <?php echo e($les->birthday); ?></p>
                                                <p><span style="font-weight: bold;">Ta'lim turi:</span>
                                                    <?php echo e($les->t_turi == 1 ? 'Grant' : 'Kontrakt'); ?>

                                                </p>
                                                <p><span style="font-weight: bold;">Qabul turi:</span>
                                                    <?php if($les->q_turi == 1): ?>
                                                        Kunduzgi
                                                    <?php elseif($les->q_turi == 2): ?>
                                                        Sirtqi
                                                    <?php elseif($les->q_turi == 3): ?>
                                                        Kechki
                                                    <?php else: ?>
                                                        Masofaviy
                                                    <?php endif; ?>
                                                </p>
                                                <p><span style="font-weight: bold;">Kursi:</span>
                                                    <?php if($les->kurs == 1): ?>
                                                        1-kurs
                                                    <?php elseif($les->kurs == 2): ?>
                                                        2-kurs
                                                    <?php elseif($les->kurs == 3): ?>
                                                        3-kurs
                                                    <?php else: ?>
                                                        4-kurs
                                                    <?php endif; ?>
                                                </p>
                                                <!-- Qo'shimcha ma'lumotlarni qo'shish -->


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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newdars\resources\views/lesson.blade.php ENDPATH**/ ?>
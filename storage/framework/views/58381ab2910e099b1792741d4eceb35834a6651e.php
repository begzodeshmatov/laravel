<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" style="font-size: 28px;" href="#"><span class="text-warning display-6"
                    style="font-size: 30px;">Mak</span>tab</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <?php $__currentLoopData = $navbar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <ul class="navbar-nav ms-auto  mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link display-6" style="font-size: 16px;"
                                href="#asosiy"><?php echo e($nav->name); ?></a>
                        </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item">
                    <a class="nav-link display-6" style="font-size: 16px;" href="<?php echo e('login'); ?>">Kirish</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>


    <section id="asosiy">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item active">
                        <img src="/rasmlar/<?php echo e($ban->image); ?>" style="filter: brightness(0.4);" width="100"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style="margin-top: -450px; font-size: 50px;color: white;"><?php echo e($ban->name); ?></h5>
                            <p style="font-size: 20px;  color:white;"><?php echo e($ban->title); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section id="features" class="section-padding mt-md-5">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <?php $__currentLoopData = $malumot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="features-img">
                            <img style="width:600px; height:300px;" src="/rasmlar/<?php echo e($mal->image); ?>"
                                alt="Rasm chiqmadi." class="img-fluid mt-md-4 w-100">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-4">
                        <div class="features-text">
                            <h2 class="text-center h2"><?php echo e($mal->name); ?></h2>
                            <p style="line-height: 1.5; font-weight: 400;"><?php echo e($mal->title); ?></p>
                            <a href="<?php echo e('register'); ?>" onclick="alert('Ro\'yxatdan o\'tishni istaysizmi???')"
                                class="btn btn-warning">Ro'yxatdan o'tish</a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <section id="pricing" class="pricing section-padding">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5 mt-5">
                        <h2 class="h1">Yordam</h2>
                        <p>Bizning maktabda siz o'zingiz qiziqqan sport turi bo'yicha darslarga qatnashishingiz mumkin
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <?php $__currentLoopData = $kurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-white text-center bg-light pb-2">
                            <div class="card-body">
                                <div class="img-area mb-4">
                                    <img style="width:600px; height:300px;" src="/rasmlar/<?php echo e($kur->image); ?>"
                                        alt="Rasm chiqmadi." class="img-fluid">
                                </div>
                                <h3 class="card-title text-dark"><?php echo e($kur->name); ?></h3>
                                <p class="lead text-dark"><?php echo e($kur->title); ?></p>
                                <button class="btn btn-warning text-dark">Read More</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
    </section>

    <section id="call-to-action bg-success">
        <div class="news bg-success aos-init aos-animate mb-3" data-aos="zoom-in">
            <?php $__currentLoopData = $yangilik; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $yan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="hammasii">
                    <div class="container">
                        <div class="col-10 col-md-10 col-lg-10 mb-5 ml-6">
                            <div class="card text-white text-center bg-light pb-2">
                                <div class="card-body">
                                    <h3 class="card-title text-dark"><?php echo e($yan->news); ?></h3>
                                    <p class="lead text-dark"><?php echo e($yan->title); ?></p>
                                    <p class="lead text-dark"><?php echo e($kur->name); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <style>
            .hammasii {
                width: 33%;
                float: left;
            }

            .clear {
                clear: both;
            }
        </style>
        <div class="clear"></div>

    </section>
    <section id="disabled" class="disabled section-padding">
        <div class="container aos-init aos-animate" data-aos="fade-right">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5 mt-5">
                        <h2 class="h1">Darslar haqida</h2>
                        <p>Maktabda bolalarning bo'sh vaqtini mazmunli o'tkazish maqsadida to'garaklar tashkil qilingan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $elon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $se): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-center bg-white pb-2">
                            <div class="card-body text-dark">
                                <div class="img-area mb-4">
                                    <img style="width:600px; height:300px;" src="/rasmlar/<?php echo e($se->image); ?>"
                                        alt="Rasm chiqmadi." class="img-fluid">
                                </div>
                                <h3 class="card-title"><?php echo e($se->name); ?></h3>
                                <p class="lead"><?php echo e($se->surname); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <style>
                    #column {
                        width: 39%;
                        float: left;
                        padding: 10px;
                    }

                    #column img {
                        width: 482px;
                        height: 321px;
                    }

                    #column a {
                        text-decoration: none;

                    }
                </style>

            </div>
        </div>
    </section>

    <section id="skills">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5 mt-5">
                        <h3 class="h1">Kurslar darajasi</h3>
                        <p>maktab.uz tizimi siz uchun quyidagi darajadagi darslarni taflik qiladi
                            va bizni kurslar orqali<br> siz quyidagi darajada va undan yuqoriroq ham o'rganishingiz
                            mumkin!!!</p>
                        <div class="skills-content">
                            <div class="progress mt-5" style="height: 40px;">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                    <span class="skill">Futbol <i class="val">100%</i></span>
                                </div>
                            </div>
                            <div class="progress mt-4" style="height: 40px;">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="98"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
                                    <span class="skill">Voleybol <i class="val">98%</i></span>
                                </div>
                            </div>
                            <div class="progress mt-4" style="height: 40px;">
                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="90"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                    <span class="skill">Basketbol <i class="val">90%</i></span>
                                </div>
                            </div>
                            <div class="progress mt-4" style="height: 40px;">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                    <span class="skill">Suzish <i class="val">85%</i></span>
                                </div>
                            </div>
                            <div class="progress mt-4" style="height: 40px;">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    <span class="skill">Tennis <i class="val">80%</i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="team section-padding">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5 mt-5">
                        <h2 class="h1">Xodimlar va o'qituvchilar</h2>
                        <p>Quyida siz maktabdagi o'qituvchilar va xodimlarni ko'rishingiz mumkin!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $lesson; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $les): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-center bg-white pb-2">
                            <div class="card-body text-dark">
                                <div class="img-area mb-4">
                                    <img style="width:600px; height:300px;" src="/rasmlar/<?php echo e($les->image); ?>"
                                        alt="" class="img-fluid">
                                </div>
                                <h3 class="card-title"><?php echo e($les->name); ?></h3>
                                <p class="lead"><?php echo e($les->title); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <style>
            #column {
                width: 33.2%;
                float: left;
                padding: 10px;
            }

            #column img {
                width: 482px;
                height: 321px;
            }

            #column a {
                text-decoration: none;

            }
        </style>
        <div id="column">

        </div>
    </section>
    <div class="clear"></div>
    <section id="contact" class="section-bg">
        <div class="bg-light">
            <div class="container mt-5 aos-init aos-animate pb-5" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header ml-5 mt-5">
                            <h3 class="text-center h1">Biz bilan bog'lanish</h3>
                            <p class="text-center font-weight-light">Darslarga qatnashmoqchi bo'lsangiz quyidagi
                                so'rovnomani to'ldiring yoki <b>+998944477484</b> raqamiga telefon qiling!!!</p>
                        </div>


                        <div class="row contact-info mt-5">

                            <div class="col-md-4">
                                <div class="contact-address">
                                    <i class="ion-ios-location-outline"></i>
                                    <h3 style="text-align: center;">Address</h3>
                                    <address style="text-align: center;"> Jizzax viloyati, Sharof Rashidov ko'chasi,
                                        64-uy</address>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="contact-phone">
                                    <i class="ion-ios-telephone-outline"></i>
                                    <h3 style="text-align: center;">Phone Number</h3>
                                    <p style="text-align: center;"><a href="tel:+998944477484"
                                            style="text-decoration: none; color: rgb(65, 63, 63);">+998944477484</a>
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="contact-email">
                                    <i class="ion-ios-email-outline"></i>
                                    <h3 style="text-align: center;">Email</h3>
                                    <p style="text-align: center;"><a href="#"
                                            style="color: rgb(52, 49, 49); text-decoration: none;">eshmatovbegzod16@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="form">
                            <form action="/xabarsave" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="form-group col-md-6 mt-4">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Ismingizni kiriting" data-rule="minlen:4"
                                            data-msg="Please enter at least 4 chars" required>
                                    </div>
                                    <div class="form-group col-md-6 mt-4">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Emailingizni kiriting" data-rule="email"
                                            data-msg="Please enter a valid email" required>
                                    </div>
                                </div>
                                <div class="form-group mt-4">
                                    <input type="text" class="form-control" name="number" id="subject"
                                        placeholder="Telefon nomeringizni kiriting!" data-rule="minlen:4"
                                        data-msg="Please enter at least 8 chars of subject" required>
                                </div>
                                <div class="form-group mt-4">
                                    <textarea class="form-control" name="title" rows="5" data-rule="required"
                                        data-msg="Please write something for us" placeholder="Nima uchun sportga qatnashmoqchisiz?"></textarea>
                                </div>
                                <div class="text-center mt-4">
                                    <input
                                        onclick="alert('Xabaringiz yuborildi!!!\nTez oraqa menagerlarimiz siz bilan bog\'lanishadi!!!')"
                                        type="submit" name="submit"
                                        style="border: none; background: limegreen; color: white; padding: 8px 15px;"><a
                                        style="text-decoration: none; color:white;" href=""></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <footer id="footer">
        <div class="footer-top mt-2 bg-dark">
            <div class="container mt-3 aos-init aos-animate" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info mt-5">
                        <h3 style="font-size:25px; color: white;">MAKTAB</h3>
                        <p style="color: white; line-height: 1.8;">maktab.uz Markazi ochildi, bu esa o'z navbatida
                            aktual
                            yo'nalishlarni, shu jumladan GANDBOL, SUZISH, SHAXMAT, SHASHKA, GIMNASTIKA,
                            va boshqalarni o'rganish imkoniyatini beradi.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links mt-5">
                        <h4 style="color: white;">To'lov turlari</h4>
                        <ul style="list-style: none;">
                            <li style="padding: 4px;"><i class="ion-ios-arrow-right"></i> <a
                                    style="text-decoration: none; color: white;" href="#">Payme</a></li>
                            <li style="padding: 4px;"><i class="ion-ios-arrow-right"></i> <a
                                    style="text-decoration: none; color: white;" href="#">Click</a></li>
                            <li style="padding: 4px;"><i class="ion-ios-arrow-right"></i> <a
                                    style="text-decoration: none; color: white;" href="#">Paynet</a></li>
                            <li style="padding: 4px;"><i class="ion-ios-arrow-right"></i> <a
                                    style="text-decoration: none; color: white;" href="#">Bank orqali</a></li>
                            <li style="padding: 4px;"><i class="ion-ios-arrow-right"></i> <a
                                    style="text-decoration: none; color: white;" href="#">Oson</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact mt-5">
                        <h4 style="color: white;">Biz bilan bog'lanish</h4>
                        <p style="color: white;">
                            Jizzax viloyati, <br>Sharof Rashidov ko'chasi, 64-uy.
                            <br> Jizzax viloyati <br>
                            <strong>Tel:</strong> +998944477484<br>
                            <strong>Email:</strong> eshmatovbegzod16@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter mt-5">
                        <h4 style="color: white;">Ma'lumot</h4>
                        <p style="color: white;">maktab.uz qulay va samarali ishlash uchun barcha sharoitlar mavjud,
                            xususan:</p>
                        <p style="color: white;">- Malakali o'qituvchilar</p>
                        <p style="color: white;">- kutubxona;</p>
                        <p style="color: white;">- kovorking markazi;</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="copyright text-center">
            © Created by <strong><a href="https://t.me/Begzod_Eshmatov"
                    style="text-decoration: none;">Bekkk;</a></strong>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\newdars\resources\views/welcome.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="adminimages/favicon.ico" type="image/ico" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Bog'lanish page!</title>

    <!-- Bootstrap -->
    <link href="/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- bootstrap-progressbar -->
    <link href="/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/admin/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="\home" class="site_title"><i class="fa fa-paw"></i> <span>Begzod Eshmatov</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="admin/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Begzod</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li>
                    <a href="/elon"><i class="fa fa-home"></i> Home </a>
                  </li>
                  <li>
                    <a href="/navbar"><i class="fa fa-edit"></i> Elon </a>
                  </li>
                  <li>
                    <a href="/banner"><i class="fa fa-desktop"></i> Banner </a>
                  </li>
                  <li>
                    <a href="/malumot"><i class="fa fa-desktop"></i> Ma'lumot </a>
                  </li> 
                  <li>
                    <a href="/lesson"><i class="fa fa-table"></i> Teacher </a>
                  </li>
                  <li>
                    <a href="/kurs"><i class="fa fa-table"></i> Kurs </a>
                  </li>
                  <li>
                    <a href="/yangilik"><i class="fa fa-table"></i> Yangilik </a>
                  </li>
                  <li>
                    <a href="/boglanish"><i class="fa fa-bar-chart-o"></i> Yangi xabarlar </a>
                  </li>
                  <li>
                  <a href = "{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-clone"></i>Chiqish</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                    
                  </li>
                </ul>
              </div>
             

            </div>
           
          </div>
        </div>
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="admin/production/images/img.jpg" alt="">Begzod Eshmatov
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                  <a class="dropdown-item" href = "{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </div>
                </li>
                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">
                        <?php 
                            use App\Boglanish;
                            $count = Boglanish::count();
                            echo $count;
                        ?> 
                    </span>
                  </a>
                  <?php
                   use Carbon\Carbon;

                    // Sanalar yaratish
                    $to = Carbon::createFromFormat('Y-m-d H:i:s', '2024-07-02 16:00:34');
                    $from = Carbon::createFromFormat('Y-m-d H:i:s', '2024-07-02 16:05:54');
           
                    // Sanalar orasidagi farqni hisoblash
                    $diffInMinutes = $to->diffInMinutes($from);
                  
                  ?>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="admin/production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span class="time">{{$diffInMinutes}} mins ago</span>
                          </span>
                        <span class="message">
                        <?php 
                            
                            $xabar = Boglanish::first();
                        ?>
                        {{$xabar->name}} <br>
                        {{$xabar->email}}
                        </span>
                      </a>
                    </li>

              
              </ul>
            </nav>
          </div>
        </div>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
          </div>
        </div>
     
        <div class="container11">
         <div class="col-md-5">
        <div class="form-group">
        <form  method="GET" action="/searchnew">
          <div class="input-group">
            <input type="search" class="form-control" name="searchnew" placeholder="Search">
                <button class="btn btn-success " type="submit">Search</button>
                <a href="/clearbog" class="btn btn-success"><i style="font-size:20px;" class='bx bx-trash'></i></a>
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
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>  

                        <tbody>
                         
                        @foreach($boglanish as $nav)
                        @if($nav->readd != 1)
                          <tr class="even pointer">
                            <td class=" ">{{$nav->id}}</td>
                            <td class=" ">{{$nav->name}}</td>
                            <td class=" ">{{$nav->email}}</td>
                            <td class=" ">{{$nav->number}}</td>
                            <td class=" ">{{$nav->title}}</td>
                            <td>
                            <a  data-bs-toggle="modal" class="btn btn-primary" data-bs-target="#exampleModal{{$nav->id}}" href="#"><i class='bx bx-pencil'></i></a>
                            <a  data-bs-toggle="modal" class="btn btn-danger" data-bs-target="#deleteXabar{{$nav->id}}" href="#"><i class='bx bx-trash' ></i></a>
                            <a  data-bs-toggle="modal" class="btn btn-success" data-bs-target="#seeXabar{{$nav->id}}" href="#"><i class="far fa fa-eye"></i></a>  
</td>

                                <!-- Modal -->
           
<div class="modal fade" id="exampleModal{{$nav->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Yangi xabar Edit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/xabarEditSave/{{$nav->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$nav->name}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$nav->email}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Number</label>
                        <input type="text" class="form-control" name="number" value="{{$nav->number}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$nav->title}}">
                    </div>
                    <button class="btn btn-primary">Edit</button>
                </form>
      </div>
    </div>
  </div>
</div>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteXabar{{$nav->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">O'chirish</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Haqiqatdan ham {{$nav->name}} ni o'chirmoqchimisiz</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yo'q</button>
                                <a href="/delete/{{$nav->id}}" class="btn btn-primary">Xa</a>
                            </div>
                            </div>
                        </div>
                        </div>

                         <!-- Modal -->
                         <div class="modal fade" id="seeXabar{{$nav->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Yangi xabar</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>{{$nav->name}} <br>
                                    {{$nav->email}} <br>
                                    {{$nav->number}} <br>
                                    {{$nav->title}}
                                  </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yo'q</button>
                                <a href="/readMessage/{{$nav->id}}" class="btn btn-primary">O'qildi</a>
                            </div>
                            </div>
                        </div>
                        </div>
                        </td>
                          </tr>
                          @endif

                          @endforeach
                          
                        
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
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>  

                        <tbody>
                         
                        @foreach($boglanish as $nav)
                        @if($nav->readd == 1)
                          <tr class="even pointer">
                            <td class=" ">{{$nav->id}}</td>
                            <td class=" ">{{$nav->name}}</td>
                            <td class=" ">{{$nav->email}}</td>
                            <td class=" ">{{$nav->number}}</td>
                            <td class=" ">{{$nav->title}}</td>
                            <td>
                            <a  data-bs-toggle="modal" class="btn btn-primary" data-bs-target="#exampleModal{{$nav->id}}" href="#"><i class='bx bx-pencil'></i></a>
                            <a  data-bs-toggle="modal" class="btn btn-danger" data-bs-target="#deleteXabar{{$nav->id}}" href="#"><i class='bx bx-trash' ></i></a>
                            <a  data-bs-toggle="modal" class="btn btn-success" data-bs-target="#seeXabar{{$nav->id}}" href="#"><i class="far fa fa-eye"></i></a>  
</td>


                                <!-- Modal -->
           
                                <div class="modal fade" id="exampleModal{{$nav->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Yangi xabar Edit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/xabarEditSave/{{$nav->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$nav->name}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$nav->email}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Number</label>
                        <input type="text" class="form-control" name="number" value="{{$nav->number}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$nav->title}}">
                    </div>
                    <button class="btn btn-primary">Edit</button>
                </form>
      </div>
    </div>
  </div>
</div>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteXabar{{$nav->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">O'chirish</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Haqiqatdan ham {{$nav->name}} ni o'chirmoqchimisiz</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yo'q</button>
                                <a href="/delete/{{$nav->id}}" class="btn btn-primary">Xa</a>
                            </div>
                            </div>
                        </div>
                        </div>


                       

                         <!-- Modal -->
                         <div class="modal fade" id="seeXabar{{$nav->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Yangi xabar</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>{{$nav->name}} <br>
                                    {{$nav->email}} <br>
                                    {{$nav->number}} <br>
                                    {{$nav->title}}
                                  </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yo'q</button>
                                <a href="/readMessage/{{$nav->id}}" class="btn btn-primary">O'qildi</a>
                            </div>
                            </div>
                        </div>
                        </div>
                        </td>
                          </tr>
                          @endif

                          @endforeach
                          
                        
                        </tbody>  
                      </table>
                    </div>
         
          <br />
        </div>
        <!-- /page content -->
        <footer>
          <div class="pull-right">
            Begzod - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/admin/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/admin/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/admin/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/admin/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/admin/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/admin/vendors/Flot/jquery.flot.js"></script>
    <script src="/admin/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/admin/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/admin/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/admin/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/admin/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/admin/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/admin/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/admin/vendors/moment/min/moment.min.js"></script>
    <script src="/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/admin/build/js/custom.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
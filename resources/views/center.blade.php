@extends('layouts.app')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3> Center haqida <small> ma'lumotlar</small> </h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Center</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content h-100">

                            <div class="row">
                                @foreach ($centers as $center)
                                    <div class="col-4  h-100">
                                        <div class="thumbnail h-50">
                                            <div class="image view view-first  h-75">
                                                <img style="width: 100%; height:100%; display: block;"
                                                    src="admin/production/images/img.jpg" alt="image" />
                                                <div class="mask">
                                                    <p style="font-size: 36px;"><a
                                                            href="center/{{ $center->center_id }}">{{ $center->name }}</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <p>{{ $center->tel }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection

@extends('layouts.app')

@section('content')
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row" style="display: inline-block;">
            <div class="tile_count">
            </div>
        </div>
        <div class="card-header">
            <a href="/exportbanner" style="float: right;" class="btn btn-success">Export Excel</a>
            <button style="float:right;" class="btn btn--add btn btn-primary" type="button" data-bs-toggle="modal"
                data-bs-target="#exampleModal"><i class="fa fa-plus"></i></button>
            <div class="container11">
                <div class="col-md-5">
                    <div class="form-group">
                        <form method="GET" action="/searchbanner">
                            <div class="input-group">
                                <input type="search" class="form-control" name="searchbanner" placeholder="Search">
                                <button class="btn btn-success " type="submit">Search</button>
                                <a href="/clearbanner" class="btn btn-success"><i style="font-size:20px;"
                                        class='bx bx-trash'></i></a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="container11">
                <div class="col-md-5">
                    <div class="form-group">
                        <form method="POST" action="/importbanner" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                                <input type="file" class="form-control" name="file">
                                <button class="btn btn-primary " type="submit" style="font-size: 15px;">Import</button>
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Banner Qo'shish</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/bannerSave" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Nomini kiriting...">
                                @error('name')
                                    <p style="color:red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title kiriting...">
                                @error('title')
                                    <p style="color:red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" accept=".jpg,.png,.jpeg">
                                @error('image')
                                    <p style="color:red;">{{ $message }}</p>
                                @enderror
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
                        <th class="column-title">Image</th>
                        <th class="column-title no-link last"><span class="nobr">Action</span>
                        </th>
                        <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt">
                                </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($banner as $ban)
                        <tr class="even pointer">
                            <td class=" ">{{ $ban->id }}</td>
                            <td class=" ">{{ $ban->name }}</td>
                            <td class=" ">{{ $ban->title }}</td>
                            <td class=" "> <img src="/rasmlar/{{ $ban->image }}" width="100" height="100"
                                    alt="Rasm chiqmadi"></td>
                            <td>
                                <a data-bs-toggle="modal" class="btn btn-primary"
                                    data-bs-target="#exampleModal{{ $ban->id }}" href="#"><i
                                        class='bx bx-pencil'></i></a>
                                <a data-bs-toggle="modal" class="btn btn-danger"
                                    data-bs-target="#deleteBanner{{ $ban->id }}" href="#"><i
                                        class='bx bx-trash'></i></a>


                                <!-- Modal -->

                                <div class="modal fade" id="exampleModal{{ $ban->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Banner Edit
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/bannerEditSave/{{ $ban->id }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label class="form-label">Name</label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ $ban->name }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" class="form-control" name="title"
                                                            value="{{ $ban->title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Image</label>
                                                        <input type="file" class="form-control" name="image"
                                                            accept=".png,.jpg,.jpeg">
                                                    </div>
                                                    <button class="btn btn-primary">Edit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteBanner{{ $ban->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">O'chirish</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Haqiqatdan ham {{ $ban->name }} ni o'chirmoqchimisiz</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Yo'q</button>
                                                <a href="/deleteban/{{ $ban->id }}" class="btn btn-primary">Xa</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <br />
    </div>
    <!-- /page content -->
@endsection

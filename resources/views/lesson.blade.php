@extends('layouts.app')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row" style="display: inline-block;">
            <div class="tile_count">
            </div>
        </div>
        <div class="card-header">
            {{-- <form action="/importword" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $les->id }}">
                <div class="mb-3">
                    <label for="word_file" class="form-label">Word faylni yuklang:</label>
                    <input type="file" class="form-control" id="word_file" name="word_file" required>
                </div>
                <button type="submit" class="btn btn-success">Word faylni yuklash va yangilash</button>
            </form> --}}



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
                            @csrf
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

                    @if (isset($message))
                        <div class="alert alert-info">
                            {{ $message }}
                        </div>
                    @endif
                    @foreach ($lesson as $les)
                        <tr class="even pointer">


                            <td class=" ">{{ $les->id }}</td>
                            <td class=" ">{{ $les->name }}</td>
                            <td class=" ">{{ $les->birthday }}</td>

                            <td class=" ">
                                @if ($les->t_turi == 1)
                                    Grant
                                @else($les->t_turi == 2)
                                    Kontrakt
                                @endif
                            </td>
                            <td class=" ">
                                @if ($les->q_turi == 1)
                                    Kunduzgi
                                @elseif($les->q_turi == 2)
                                    Sirtqi
                                @elseif($les->q_turi == 3)
                                    Kechki
                                @else($les->q_turi == 4)
                                    Masofaviy
                                @endif
                            </td>
                            <td class=" ">
                                @if ($les->fakultet == 1)
                                    Amaliy matematika
                                @else($les->fakultet == 2)
                                    Psixologiya
                                @endif
                            </td>
                            <td class=" ">
                                @if ($les->t_nomi == 1)
                                    O'zbekiston Milliy universiteti Jizzax filiali
                                @elseif($les->t_nomi == 2)
                                    Jizzax davlat pedagogika universiteti
                                @elseif($les->t_nomi == 3)
                                    Jizzax davlat politexnika instituti
                                @elseif($les->t_nomi == 4)
                                    Sambhram universiteti
                                @endif
                            </td>
                            <td class=" ">
                                @if ($les->kurs == 1)
                                    1-kurs
                                @elseif($les->kurs == 2)
                                    2-kurs
                                @elseif($les->kurs == 3)
                                    3-kurs
                                @elseif($les->kurs == 4)
                                    4-kurs
                                @endif
                            </td>

                            <td class=" ">
                                <a data-bs-toggle="modal" class="btn btn-primary"
                                    data-bs-target="#exampleModal{{ $les->id }}" href="#"><i
                                        class='bx bx-pencil'></i></a>
                                <a data-bs-toggle="modal" class="btn btn-danger"
                                    data-bs-target="#deleteLesson{{ $les->id }}" href="#"><i
                                        class='bx bx-trash'></i></a>
                                <a href="/exportpdf/{{ $les->id }}" class="btn btn-success"><i
                                        class='bx bxs-file-pdf'></i></a>
                                <a href="/exportwordd/{{ $les->id }}" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#lessonModal{{ $les->id }}">Ma'lumotlarni ko'rish
                                </a>


                                <!-- Modal -->

                                <div class="modal fade" id="exampleModal{{ $les->id }}" tabindex="-1"
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
                                                <form action="/lessonEditSave/{{ $les->id }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label class="form-label">Name</label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ old('name', $les->name) }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Tug'ilgan kun</label>
                                                        <input type="date" class="form-control" name="birthday"
                                                            value="{{ old('birthday', $les->birthday) }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Ta'lim turi</label>
                                                        <select class="form-select" name="t_turi">
                                                            <option value="1"
                                                                {{ $les->t_turi == 1 ? 'selected' : '' }}>Grant
                                                            </option>
                                                            <option value="2"
                                                                {{ $les->t_turi == 2 ? 'selected' : '' }}>Kontrakt
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Qabul turi</label>
                                                        <select class="form-select" name="q_turi">
                                                            <option value="1"
                                                                {{ $les->q_turi == 1 ? 'selected' : '' }}>Kunduzgi
                                                            </option>
                                                            <option value="2"
                                                                {{ $les->q_turi == 2 ? 'selected' : '' }}>Sirtqi
                                                            </option>
                                                            <option value="3"
                                                                {{ $les->q_turi == 3 ? 'selected' : '' }}>Kechki
                                                            </option>
                                                            <option value="4"
                                                                {{ $les->q_turi == 4 ? 'selected' : '' }}>Masofaviy
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Fakultet</label>
                                                        <select class="form-select" name="fakultet">
                                                            <option value="1"
                                                                {{ $les->fakultet == 1 ? 'selected' : '' }}>Amaliy
                                                                matematika</option>
                                                            <option value="2"
                                                                {{ $les->fakultet == 2 ? 'selected' : '' }}>
                                                                Psixologiya
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Oliy ta'lim nomi</label>
                                                        <select class="form-select" name="t_nomi">
                                                            <option value="1"
                                                                {{ $les->t_nomi == 1 ? 'selected' : '' }}>
                                                                O'zbekiston
                                                                Milliy universiteti Jizzax filiali</option>
                                                            <option value="2"
                                                                {{ $les->t_nomi == 2 ? 'selected' : '' }}>Jizzax
                                                                davlat
                                                                pedagogika universiteti</option>
                                                            <option value="3"
                                                                {{ $les->t_nomi == 3 ? 'selected' : '' }}>Jizzax
                                                                davlat
                                                                politexnika instituti</option>
                                                            <option value="4"
                                                                {{ $les->t_nomi == 4 ? 'selected' : '' }}>Sambhram
                                                                universiteti</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Kurs</label>
                                                        <select class="form-select" name="kurs">
                                                            <option value="1"
                                                                {{ $les->kurs == 1 ? 'selected' : '' }}>1-kurs
                                                            </option>
                                                            <option value="2"
                                                                {{ $les->kurs == 2 ? 'selected' : '' }}>2-kurs
                                                            </option>
                                                            <option value="3"
                                                                {{ $les->kurs == 3 ? 'selected' : '' }}>3-kurs
                                                            </option>
                                                            <option value="4"
                                                                {{ $les->kurs == 4 ? 'selected' : '' }}>4-kurs
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
                                <div class="modal fade" id="deleteLesson{{ $les->id }}" tabindex="-1"
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
                                                <p>Haqiqatdan ham {{ $les->name }} ni o'chirmoqchimisiz
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Yo'q</button>
                                                <a href="/deleteles/{{ $les->id }}" class="btn btn-primary">Xa</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Jadval -->

                                <!-- Modal -->
                                <div class="modal fade" id="lessonModal{{ $les->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    {{ $les->name }} haqida
                                                    ma'lumot</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><span style="font-weight: bold;">Ism:</span> {{ $les->name }}</p>
                                                <p><span style="font-weight: bold;">Tug'ilgan kun:</span>
                                                    {{ $les->birthday }}</p>
                                                <p><span style="font-weight: bold;">Ta'lim turi:</span>
                                                    {{ $les->t_turi == 1 ? 'Grant' : 'Kontrakt' }}
                                                </p>
                                                <p><span style="font-weight: bold;">Qabul turi:</span>
                                                    @if ($les->q_turi == 1)
                                                        Kunduzgi
                                                    @elseif($les->q_turi == 2)
                                                        Sirtqi
                                                    @elseif($les->q_turi == 3)
                                                        Kechki
                                                    @else
                                                        Masofaviy
                                                    @endif
                                                </p>
                                                <p><span style="font-weight: bold;">Kursi:</span>
                                                    @if ($les->kurs == 1)
                                                        1-kurs
                                                    @elseif($les->kurs == 2)
                                                        2-kurs
                                                    @elseif($les->kurs == 3)
                                                        3-kurs
                                                    @else
                                                        4-kurs
                                                    @endif
                                                </p>
                                                <!-- Qo'shimcha ma'lumotlarni qo'shish -->


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

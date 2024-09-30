<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pdf</title>
    <style>
        .column {
            width: 33%;
            float: left;
            padding: 5px;
        }

        .clear {
            clear: both;
        }

        .columnmessage {
            margin-top: 60px;
        }
    </style>

</head>

<body>

    <p style="text-align: right;">{{ $time }}</p>

    <hr style="color:black;">
    <div class="container">
        <div class="column">
            <img src="rasmlar/download.png" alt="" width="100" style="margin-top:30px;">
        </div>
        <div class="column">
            <img src="rasmlar/rasm.jfif" alt="" width="100"
                style="display: flex;  align-items: center;
            justify-content: center;">
        </div>
        <div class="column">
            <p style="">O‘zbekiston
                Respublikasi <br>
                Oliy ta’lim, <br>
                fan va <br>
                innovatsiyalar vazirligi</p>
        </div>
    </div>

    <div class="clear"></div>

    <div class="columnmessage">
        <div class="columntwo">
            <p>5271-8166-daeb-a914-a9f0-5709-8475b <br>
                Hujjat yaratilgan sana: 2024-09-06 <br>
                Ariza raqami: 146403968</p>
        </div>
        @if ($lesson)
            <div class="columntwo">
                <p style="text-align: right; margin-top:-50px;">Hujjat berilgan: {{ $lesson->name }} </p>
            </div>
        @endif
    </div>
    <div class="clear"></div>

    <div class="row">
        <h3 style="text-align: center; margin-bottom:20px;">O'qish joyidan ma'lumotnoma</h3>
    </div>

    <table border="1" cellspacing="0" cellpadding="5" width="100%" style="margin-top: 20px;">

        <tbody>
            @if ($lesson)
                <tr align="center">
                    <th>F.I.O</th>
                    <td class=" ">{{ $lesson->name }}</td>
                </tr>
                <tr align="center">
                    <th>Tug'ilgan sana</th>
                    <td class=" ">{{ $lesson->birthday }}</td>
                </tr>
                <tr align="center">
                    <th>Ta'lim turi</th>
                    <td class=" ">
                        @if ($lesson->t_turi == 1)
                            Grant
                        @else($lesson->t_turi == 2)
                            Kontrakt
                        @endif
                    </td>
                </tr>
                <tr align="center">
                    <th>Qabul turi</th>
                    <td class=" ">
                        @if ($lesson->q_turi == 1)
                            Kunduzgi
                        @elseif($lesson->q_turi == 2)
                            Sirtqi
                        @elseif($lesson->q_turi == 3)
                            Kechki
                        @else($lesson->q_turi == 4)
                            Masofaviy
                        @endif
                    </td>
                </tr>
                <tr align="center">
                    <th>Fakultet</th>
                    <td class=" ">
                        @if ($lesson->fakultet == 1)
                            Amaliy matematika
                        @else($lesson->fakultet == 2)
                            Psixologiya
                        @endif
                    </td>
                </tr>
                <tr align="center">
                    <th>Oliy ta'lim nomi</th>
                    <td class=" ">
                        @if ($lesson->t_nomi == 1)
                            O'zbekiston Milliy universiteti Jizzax filiali
                        @elseif($lesson->t_nomi == 2)
                            Jizzax davlat pedagogika universiteti
                        @elseif($lesson->t_nomi == 3)
                            Jizzax davlat politexnika instituti
                        @elseif($lesson->t_nomi == 4)
                            Sambhram universiteti
                        @endif
                    </td>
                </tr>
                <tr align="center">
                    <th>Kurs</th>
                    <td class=" ">
                        @if ($lesson->kurs == 1)
                            1-kurs
                        @elseif($lesson->kurs == 2)
                            2-kurs
                        @elseif($lesson->kurs == 3)
                            3-kurs
                        @elseif($lesson->kurs == 4)
                            4-kurs
                        @endif
                    </td>
                </tr>

            @endif
        </tbody>
    </table>

    <div class="title">
        <h3 style="text-align: left;">Ma'lumot so‘ralgan joyga taqdim etish uchun berildi.</h3>
    </div>

    <div class="columnn" style="width: 80%">
        <p style="font-size: 13px;">Mazkur hujjat Vazirlar Mahkamasining 2017 yil 15 sentyabrdagi 728-son qaroriga
            muvofiq Yagona interaktiv davlat xizmatlari portalida shakllantirilgan elektron
            hujjatning nusxasi bo‘lib, davlat organlari tomonidan ushbu hujjatni qabul qilishni rad
            etishlari qat’iyan taqiqlanadi. Hujjat haqiqiyligini repo.gov.uz veb-saytida hujjatning
            noyob raqamini kiritib yoki mobil telefon yordamida QR- kodni skaner qilish orqali
            tekshirish mumkin.
        </p>
    </div>
    <div class="columnn" style="width: 20%">
        <img src="rasmlar/qrcode.png" style="text-align: right; margin-left:610px; margin-top:-110px;" alt=""
            width="100">
    </div>

    <hr>





</body>

</html>

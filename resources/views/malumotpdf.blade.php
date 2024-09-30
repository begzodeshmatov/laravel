<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ma'lumot PDF</title>
</head>

<body>
    <h1 style="text-align: center;">Bu jadvalni pdf ga export qilinishi</h1>
    <table border="2" cellspacing="0" cellpadding="15" width="100%">
        <thead>
            <tr align="center">
                <th class="column-title">Id </th>
                <th class="column-title">Name</th>
                <th class="column-title">Title </th>
                <th class="column-title">Image</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($malumot as $mal)
                <tr align="center">
                    <td class=" ">{{ $mal->id }}</td>
                    <td class=" ">{{ $mal->name }}</td>
                    <td class=" ">{{ $mal->title }}</td>
                    <td class=" "> <img src="rasmlar/{{ $mal->image }}" width="100" height="100"
                            alt="Rasm chiqmadi"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

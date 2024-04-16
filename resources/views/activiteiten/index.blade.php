<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alles van Activiteiten</title>
</head>

<body>
    <h1 class="Title">Tabel met alles van activiteiten</h1>

    <ul>
        @foreach ($activiteiten as $activiteit)
            <table class="Table">
                <thead class="TableTitles">
                    <tr>
                        <th>Activiteit</th>
                        {{-- <th>Omschrijving</th> --}}
                        <th>Korte Omschrijving</th>
                        <th>Eigenaar</th>
                        {{-- <th>Created</th> --}}
                        {{-- <th>Updated</th> --}}
                    </tr>
                </thead>
                <tbody class="TableBody">
                    <tr>
                        <td>{{ $activiteit->activiteit }}</td>
                        {{-- <td>{{ $activiteit->omschrijving }}</td> --}}
                        <td>{{ $activiteit->kortomschrijving }}</td>
                        <td>{{ $activiteit->eigenaar }}</td>
                        {{-- <td>{{ $activiteit->created_at }}</td> --}}
                        {{-- <td>{{ $activiteit->updated_at }}</td> --}}
                    </tr>
            </table>
        @endforeach
    </ul>
</body>

</html>

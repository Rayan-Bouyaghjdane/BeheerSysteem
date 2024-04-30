<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    @vite('resources/css/reserveren.css')
    <title>Reserveringen</title>
</head>

<body>
    @if (session()->has('success'))
        <script>
            setTimeout(function() {
                window.location.href = "{{ route('reserveringen.index') }}"
            }, 2000);
        </script>
        <div class="succes-message">
            <p>{{ session()->get('success') }}</p>
        </div>
    @endif
    <h1 class="title">Alle reserveringen die beoordeeld moeten worden</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ReserveringId</th>
                <th>Activiteit</th>
                <th>Datum</th>
                <th>Dag van de Week</th>
                <th>Aantal laptops</th>
                <th>Status</th>
                <th>created at</th>
                <th>updated at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reserveringen as $res)
                <form action="{{ route('reserveringen.update.status', $res->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <tr>
                        <td>{{ $res->id }}</td>
                        <td>{{ $res->activiteit }}</td>
                        <td>{{ $res->datum }}</td>
                        <td>{{ $res->dagvandeweek }}</td>
                        <td>{{ $res->aantallaptops }}</td>
                        <td>
                            <select name="status" id="">
                                @foreach ($statusreserveringen as $status)
                                    <option @selected(!empty(old('status')) ? old('status') == $status->status : $res->status == $status->status) value="{{ $status->status }}">
                                        {{ $status->status }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>{{ $res->created_at }}</td>
                        <td>{{ $res->updated_at }}</td>
                        <td><button type="submit" class="button-update">Update</button></td>
                    </tr>
                </form>
            @endforeach
        </tbody>
    </table>
</body>

</html>

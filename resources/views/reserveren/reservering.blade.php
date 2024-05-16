@include('includes.header')
<br>

<h2 style="text-align: center;">Reserveringen</h2>

    <table class="table">
        <thead>
            <tr>
                <th>ReserveringId</th>
                <th>Activiteit</th>
                <th>Dag van de week</th>
                <th>Datum</th>
                <th>Aantal laptops</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reserveringen as $r)
            <tr>
                <td>{{$r->id}}</td>
                <td>{{$r->activiteit}}</td>
                <td>{{$r->dagvandeweek}}</td>
                <td>{{$r->datum}}</td>
                <td>{{$r->aantallaptops}}</td>
                <td>{{$r->status}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


@include('includes.footer')
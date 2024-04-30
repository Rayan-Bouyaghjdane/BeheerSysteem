
@include('includes.header')

    <h1 class="Title">Tabel met alles van activiteiten</h1>

    <ul>
        @foreach ($activiteiten as $act)
            <table>
                <thead>
                    <tr>
                        <th>Activiteit</th>
                        {{-- <th>Omschrijving</th> --}}
                        <th>Korte Omschrijving</th>
                        <th>Eigenaar</th>
                        {{-- <th>Created</th> --}}
                        {{-- <th>Updated</th> --}}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $act->activiteit }}</td>
                        {{-- <td>{{ $act->omschrijving }}</td> --}}
                        <td>{{ $act->kortomschrijving }}</td>
                        <td>{{ $act->eigenaar }}</td>
                        {{-- <td>{{ $act->created_at }}</td> --}}
                        {{-- <td>{{ $act->updated_at }}</td> --}}
                    </tr>
            </table>
            {{-- <?php var_dump($act); ?> --}}
        @endforeach
    </ul>

    @include('includes.footer')

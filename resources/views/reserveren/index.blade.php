@include('includes.header')


<h2 style="text-align: center;">Reserveren</h2>

@if(session('success'))
        <div class="alert alert-success" id="melding">
            {{ session('success') }}
        </div>
    @endif

<div class="container">
  <div class="row">
    <form action="{{route('reserveren.store')}}" method="post">
      @csrf
        <label for="activiteit">Activiteit:</label> <br>
        <select name="activiteit" id="activiteit">
          <option value="">Selecteer een activiteit</option>
          @foreach($activiteiten as $ac)
          <option value="{{$ac->activiteit}}" data-dagvandeweek="{{$ac->dagvandeweek}}" data-begintijd="{{$ac->begintijd}}" data-eindtijd="{{$ac->eindtijd}}">{{$ac->activiteit}}</option>
          @endforeach
        </select>  <br>
         
        <label for="dagvandeweek">Dag van de week:</label> <br>
        <input type="text" name="dagvandeweek" id="dagvandeweek" readonly class="dagvandeweek" class="dagvandetijd">

        <br>
        <label for="Tijd">Tijd:</label> <br>
        <input type="text" name="begintijd" id="begintijd" readonly class="tijd"> tot <input type="text" name="eindtijd" id="eindtijd" readonly class="tijd"> <br>

      <label for="datum">Datum:</label> <br>
      <input type="date" name="datum" id="datum"> <br>

      <label for="aantallaptops">Aantallaptops:</label> <br>
      <input type="number" name="aantallaptops" min="1" max="20"> <br>

      <button type="submit">reservering aanmaken</button>

    </form>
  </div>
</div>

<script>
        // Voeg een event listener toe aan het activiteitenselectieveld om de begintijd en eindtijd in te vullen
        document.getElementById('activiteit').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            document.getElementById('dagvandeweek').value = selectedOption.getAttribute('data-dagvandeweek');
            document.getElementById('begintijd').value = selectedOption.getAttribute('data-begintijd');
            document.getElementById('eindtijd').value = selectedOption.getAttribute('data-eindtijd');
        });
    </script>


@include('includes.footer')
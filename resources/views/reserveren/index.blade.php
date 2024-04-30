@include('includes.header')


<h2 style="text-align: center;">Reserveren</h2>

@if(session('success'))
        <div class="alert alert-success" style="text-align: centeter;">
            {{ session('success') }}
        </div>
    @endif

<div class="container" style="text-align: center;">
  <div class="row">
    <form action="{{route('reserveren.store')}}" method="post">
      @csrf
        <label for="activiteit">Activiteit:</label>
        <select name="activiteit" id="activiteit">
          <option value="">Selecteer een activiteit</option>
          @foreach($activiteiten as $ac)
          <option value="{{$ac->activiteit}}" data-dagvandeweek="{{$ac->dagvandeweek}}" data-begintijd="{{$ac->begintijd}}" data-eindtijd="{{$ac->eindtijd}}">{{$ac->activiteit}}</option>
          @endforeach
        </select>  <br>
         
        <label for="dagvandeweek">Dag van de week:</label>
        <input type="text" name="dagvandeweek" id="dagvandeweek" readonly>

        <br>
        <label for="Tijd">Tijd:</label>
        <input type="text" name="begintijd" id="begintijd" readonly> tot <input type="text" name="eindtijd" id="eindtijd" readonly> <br>

      <label for="datum">Datum:</label>
      <input type="date" name="datum" id="datum"> <br>

      <label for="aantallaptops">Aantallaptops:</label>
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
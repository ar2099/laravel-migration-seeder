@php
dump($trains);
$date = new DateTime(date("Y-m-d"));
$ora = $date->format('Y-m-d');

@endphp

<p>Data di oggi: {{ $ora }}</p>
<h3>Treni di oggi</h3>

@forelse ($trains as $train)
@php
    if ($train->in_orario == 1) {
   $orario = "si";
} else {
    $orario = "no";
}
if ($train->cancellato == 0) {
   $stato = "attivo";
} else {
    $stato = "cancellato";
}
@endphp
@if ($train->data_treno == $ora)
    <ul>
<li>Codice treno: {{$train->codice_treno}}.</li>
<li>Stazione di partenza: {{$train->stazione_partenza}}.</li>
<li>Stazione di arrivo: {{$train->stazione_arrivo}}.</li>
<li>Orario partenza: {{$train->orario_partenza}}</li>
<li>Orario arrivo: {{$train->orario_arrivo}}</li>
<li>In orario: {{$orario}}</li>
<li>Stato: {{$stato}}</li>
<li>Azienda: {{$train->azienda}}.</li>
<li>Quante carrozze: {{$train->carrozze}}.</li>
<li>-------------------------</li>
</ul>

@else
   
@endif



            
       
  
       
    @empty
        <span>No elementi</span>
    @endforelse

<h3>Tutti i treni</h3>
@forelse ($trains as $train)
@php
    if ($train->in_orario == 1) {
   $orario = "si";
} else {
    $orario = "no";
}
if ($train->cancellato == 0) {
   $stato = "attivo";
} else {
    $stato = "cancellato";
}
@endphp

    <ul>
<li>Codice treno: {{$train->codice_treno}}.</li>
<li>Stazione di partenza: {{$train->stazione_partenza}}.</li>
<li>Stazione di arrivo: {{$train->stazione_arrivo}}.</li>
<li>Orario partenza: {{$train->orario_partenza}}</li>
<li>Orario arrivo: {{$train->orario_arrivo}}</li>
<li>In orario: {{$orario}}</li>
<li>Stato: {{$stato}}</li>
<li>Azienda: {{$train->azienda}}.</li>
<li>Quante carrozze: {{$train->carrozze}}.</li>
<li>-------------------------</li>
</ul>




            
       
  
       
    @empty
        <span>No elementi</span>
    @endforelse



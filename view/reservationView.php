<?php

if (!function_exists('voirReserv')) {
    function voirReserv()
    {
        echo '<table class="table table-striped" style="width: 65%;text-align: left;margin-left: 15%;">
  <thead>
    <tr>
      <th scope="col" >numero de Reservation</th>
      <th scope="col">numero de planing</th>
      <th scope="col">fauteuil</th>
    </tr>
    </thead>';
        while ($i < $max) {
            echo '
    <tr>
      <th scope="row">1</th>
      <td>' . $a_modifier[$i]->getFilm() . '</td>
      <td>' . $a_modifier[$i]->getDatejour() . '</td>
      <td>' . $a_modifier[$i]->getDebutheure() . '</td>
      <td>' . $a_modifier[$i]->getfinheure() . '</td>
      <td><a class="btn btn-default" href="/updateplaning?n_film=' . $a_modifier[$i]->getFilm() . '" role="button">Oui</a> </button></td>
      <td><a class="btn btn-default" href="#" role="button">Oui</a> </button></td>// à finir
    </tr>';
            $i++;
        }
        echo "</table>";
    }
}
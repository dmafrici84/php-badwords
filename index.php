<?php

  // Creare una variabile con un paragrafo di testo. Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.

  $badword = $_GET["parola"];

  $testo = "Taca banda<br>
            Alcuni ne parlano solo con i preti<br>
            alcuni ne parlano solo con gli avvocati<br>
            alcuni si parlano sempre e solo da soli<br>
            alcuni ancora non si sono parlati<br>
            alcuni si lavano tredici volte al giorno<br>
            ma non riescono in nessun modo a sentirsi puliti<br>
            alcuni profumano solo il proprio inferno<br>
            son tutti qui intorno son tutti impuniti<br>
            e tutti…<br>
            alcuni hanno trovato, alla fine, il nemico<br>
            e non dovevano mica cercare lontano<br>
            alcuni si chiedono di che cosa vivranno<br>
            alcuni si chiedono come, alcuni lo sanno<br>
            alcuni sputano tutte le proprie sentenze<br>
            senza nemmeno averle masticate<br>
            alcuni sputano tutte le proprie sentenze<br>
            perché c’hanno un fegato<br>
            molto ma molto ma molto ma molto ingrossato<br>
            e tutti…";

  $lunghezza = strlen($testo);

  echo "Testo";
  echo "<br>";
  var_dump ($testo);
  echo "<br>";
  echo "<br>";
  echo "Badword = ";
  echo $badword;
  echo "<br>";
  echo "Lunghezza testo = ";
  echo $lunghezza;

  $sostituisci = "***";

  $newTesto = str_replace($badword,$sostituisci,$testo);

  $lunghezza1 = strlen($newTesto);

  echo "<br>";
  echo "<br>";
  echo "Testo Modificato";
  echo "<br>";
  var_dump ($newTesto);
  echo "<br>";
  echo "<br>";
  echo "Lunghezza testo modificato = ";
  echo $lunghezza1;

 ?>

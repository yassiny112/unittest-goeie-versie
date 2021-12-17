
<?php
  namespace TDD;

  include("./receipt.php");
  include("./KerstBorrel.php");

  $receipt = new Receipt();
  $KerstBorrel = new KerstBorrel();

  // $rekening = array(56, 128, 89, 24, 133, 233, 212);

  $rekening = [56, 128, 89, 24, 133, 233, 212, 23];

  $aantalPersoneelsleden = 21;

  $maxBudget = 5000;



  echo dirname(dirname(__FILE__));
  echo "<br>";
  echo DIRECTORY_SEPARATOR;
  echo "<br>";
  echo dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
?>


<h1>Voorbeeld Unittest</h1>


<hr>


<h3> Er komen op de kerstborrel <?= $aantalPersoneelsleden; ?> en het maximale budget wat is gereserveerd voor de kerstborrel is: <?= $maxBudget; ?>.
     Het bedrag van de kerstpakket is dan: <?= $KerstBorrel->Kostenkerstpakket ($aantalPersoneelsleden, $maxBudget); ?>.
</h3>
